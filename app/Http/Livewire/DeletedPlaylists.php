<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use Livewire\Component;

class DeletedPlaylists extends Component
{
    public $playlists;
    public $category;
    public $open = false;
    public $loaded = false;


    protected $listeners = [
        'deleted' => 'onPlaylistDelete',
    ];


    public function mount($category)
    {
        $this->category = $category;
        $this->playlists = collect();
    }

    public function updatePlaylists()
    {
        $this->playlists = $this->category->playlists()->onlyTrashed()->orderBy('deleted_at', 'desc')->get();
    }

    public function loadPlaylists()
    {
        $this->updatePlaylists();
        $this->loaded = true;
    }

    public function toggleOpen()
    {
        $this->open = !$this->open;
        //load playlist after first open
        if (!$this->loaded) {
            $this->loadPlaylists();
        }
    }
    public function restorePlaylist($playlistId)
    {
        $playlist = Playlist::onlyTrashed()->find($playlistId);
        $playlist->restoreAtEnd();
        $this->emit('undeleted');
        $this->updatePlaylists();
        $this->emit('toast', 'Przywrócono: "' . $playlist->title . '"');
    }

    public function onPlaylistDelete()
    {
        $this->updatePlaylists();
    }

    public function render()
    {
        return view('livewire.deleted-playlists');
    }
}
