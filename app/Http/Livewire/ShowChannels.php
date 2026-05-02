<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShowChannels extends Component
{
    public $channels;
    public $category;
    public $selectedChannels = [];

    protected $listeners = ['categorySelected' => 'categorySelected'];

    public function mount($category)
    {
        $this->category = $category;
        $this->channels = $this->fetchChannels();
    }

    public function render()
    {
        return view('livewire.show-channels');
    }

    private function fetchChannels()
    {
        return $this->category->playlists()
            ->whereNotNull('channelTitle')
            ->where('channelTitle', '<>', '')
            ->distinct()
            ->orderBy('channelTitle')
            ->pluck('channelTitle');
    }

    public function toggleSelect($channel)
    {
        if (in_array($channel, $this->selectedChannels)) {
            $this->selectedChannels = array_values(array_diff($this->selectedChannels, [$channel]));
        } else {
            $this->selectedChannels[] = $channel;
        }
        $this->emit('channelsSelected', $this->selectedChannels);
    }

    public function importChannel($channelTitle)
    {
        $channelId = $this->category->playlists()
            ->where('channelTitle', $channelTitle)
            ->whereNotNull('channelId')
            ->value('channelId');

        if (!$channelId) return;

        $response = Http::acceptJson()->get('https://youtube.googleapis.com/youtube/v3/channels', [
            'part' => 'contentDetails',
            'id' => $channelId,
            'key' => env('YOUTUBE_API_KEY'),
        ]);

        if (!$response->successful()) return;

        $uploadsPlaylistId = $response->json('items.0.contentDetails.relatedPlaylists.uploads');

        if (!$uploadsPlaylistId) return;

        $this->emit('startChannelImport', $uploadsPlaylistId);
    }

    public function categorySelected($category_id)
    {
        $this->category = Category::find($category_id);
        $this->channels = $this->fetchChannels();
        $this->selectedChannels = [];
    }
}
