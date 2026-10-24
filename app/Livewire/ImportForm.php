<?php

namespace App\Livewire;

use App\Http\Controllers\YoutubeApiController;
use App\Models\Category;
use App\Models\Playlist;
use Carbon\CarbonInterval;
use Livewire\Attributes\On;
use Livewire\Component;

class ImportForm extends Component
{

    public $categoryId;
    public $links = '';
    public array $newElements = [];
    public $categoryName;



    public function mount($category)
    {
        $this->categoryId = $category->id;
        $this->categoryName = $category->name;
    }

    public function render()
    {
        return view('livewire.import-form');
    }

    #[On('categorySelected')]
    public function changeCategory($categoryId)
    {
        $category = Category::find($categoryId);
        $this->categoryId = $category->id;
        $this->categoryName = $category->name;
    }

    #[On('startChannelImport')]
    public function importFromChannel($uploadsPlaylistId)
    {
        $this->links = 'https://www.youtube.com/playlist?list=' . $uploadsPlaylistId;
        $this->import();
    }


    public function import()
    {
        $this->newElements = [];
        $this->validate([
            'links' => 'required|string',
        ]);

        //explode the links into an array, links can be separated by comma, space, new line
        $input = preg_split('/\s+|,/', $this->links);
        $input = collect($input);
        $input = $input->reject(function ($value, $key) {
            return empty($value);
        });
        //extract the video id from the link, if the link is not a youtube link, it will return the original value
        $input = $input->map(function ($link, $key) {
            if (strpos($link, 'watch?v=') !== false) {
                $url = parse_url($link);
                parse_str($url['query'], $query);
                return $query['v'];
            } else {
                return $link;
            }
        });
        //remove duplicate video ids
        $input = $input->unique();
        if ($input->count() > 50) {
            session()->flash('error', 'Możesz dodać maksymalnie 50 linków na raz');
            return;
        }

        $this->links = $input->implode("\n");
        if ($input->count() == 0) {
            session()->flash('error', 'Nie znaleziono linków');
            return;
        }


        $ytApi = new YoutubeApiController();
        //if there is only one link and it is a playlist, get all the video ids from the playlist
        if ($input->count() == 1) {
            $url = parse_url($input->first());
            if (isset($url['query'])) {
                parse_str($url['query'], $query);
                if (isset($query['list']) && !isset($query['v'])) {
                    $input = $ytApi->playlistItemsIds($query['list']);
                    if ($input->count() == 0) {
                        session()->flash('error', 'Nie znaleziono filmów w podanej playliście');
                        return;
                    }
                }
            }
        }

        $videos = $input->map(function ($videoId) {
            $playlist = new Playlist();
            $playlist->id = $videoId;
            return $playlist;
        })->values();

        $videos = $ytApi->updateVideos($videos);
        $existingIds = Playlist::withTrashed()->whereIn('id', $videos->pluck('id'))->pluck('id');
        $this->newElements = $videos->map(fn(Playlist $video) => [
            'id' => $video->id,
            'title' => $video->title,
            'description' => $video->description,
            'thumbnails' => $video->thumbnails,
            'duration' => $video->title ? $video->duration->totalSeconds : null,
            'durationFormatted' => $video->title ? $video->durationFormatted() : '-',
            'publishedAt' => $video->publishedAt?->format('Y-m-d H:i:s'),
            'channelId' => $video->channelId,
            'channelTitle' => $video->channelTitle,
            'link' => $video->getLink(),
            'alreadyExists' => $existingIds->contains($video->id),
        ])->all();
    }

    public function add($id)
    {
        $row = collect($this->newElements)->firstWhere('id', $id);
        if (!$row || $row['alreadyExists'] || $row['title'] === null) {
            return;
        }
        $new = new Playlist(collect($row)->except(['durationFormatted', 'link', 'alreadyExists', 'duration'])->all());
        $new->id = $row['id'];
        $new->duration = CarbonInterval::seconds($row['duration'])->cascade();
        $new->order = 1 + Playlist::where('category_id', $this->categoryId)->max('order');
        $new->category_id = $this->categoryId;
        $new->save();
        $this->newElements = collect($this->newElements)->reject(fn($value) => $value['id'] == $id)->values()->all();
        $this->dispatch('playlistCreated', $new->id);
    }
}
