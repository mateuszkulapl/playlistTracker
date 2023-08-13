<?php

namespace App\Http\Livewire;

use App\Http\Controllers\YoutubeApiController;
use App\Models\Category;
use App\Models\Playlist;
use Carbon\CarbonInterval;
use Livewire\Component;

class ImportForm extends Component
{

    public $categoryId;
    public $links;
    public $newElements;
    public $categoryName;
    protected $listeners = [
        'categorySelected' => 'changeCategory',
    ];



    public function mount($category)
    {
        $this->categoryId = $category->id;
        $this->categoryName = $category->name;
        $this->links = collect();
        $this->newElements = collect();
    }

    public function render()
    {
        return view('livewire.import-form');
    }

    public function changeCategory($id)
    {
        $category = Category::find($id);
        $this->categoryId = $category->id;
        $this->categoryName = $category->name;
    }


    public function hydrateNewElements($value)
    {
        $this->newElements = $this->newElements->map(function ($item, $key) {
            $item['duration'] = CarbonInterval::seconds($item['duration'])->cascade();
            return new Playlist($item);
        });
    }

    public function dehydrateNewElements($value)
    {
        $this->newElements = $this->newElements->map(function ($item, $key) {
            $totalSeconds = $item->duration->totalSeconds;
            $i = $item->toArray();
            $i['duration'] = $totalSeconds;
            return $i;
        });
    }

    public function import()
    {
        $this->newElements = collect();
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

        $input->each(function ($videoId, $key) {
            $playlist = new Playlist();
            $playlist->id = $videoId;
            $this->newElements->push($playlist);
        });

        $this->newElements = $ytApi->updateVideos($this->newElements);
        $this->checkIfNewPlaylistsAlreadyExists();
    }
    public function checkIfNewPlaylistsAlreadyExists()
    {
        $newIds = $this->newElements->pluck('id');
        $existingIds = Playlist::withTrashed()->whereIn('id', $newIds)->pluck('id');
        $this->newElements->each(function ($playlist, $key) use ($existingIds) {
            if ($existingIds->contains($playlist->id))
                $playlist->alreadyExists = true;
        });
    }

    public function add($id)
    {
        $new = $this->newElements->where('id', $id)->first();
        if (!$new)
            return;
        $new->order = 1 + Playlist::where('category_id', $this->categoryId)->max('order');
        $new->category_id = $this->categoryId;
        $new->save();
        $this->newElements = $this->newElements->reject(function ($value, $key) use ($id) {
            return $value->id == $id;
        });
        $this->emit('playlistCreated', $new->id);
    }
}
