<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Playlist;
use Illuminate\Support\Collection;
use Livewire\Component;

class DeletedPlaylists extends Component
{
    public Collection $playlists;
    public Category $category;
    public bool $open = false;
    public bool $loaded = false;


    protected $listeners = [
        'deleted' => 'onPlaylistDelete',
        'categorySelected' => 'onCategoryChange',
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
    public function open()
    {
        $this->open = true;
        //load playlist after first open
        if (!$this->loaded) {
            $this->loadPlaylists();
        }
    }
    public function close()
    {
        $this->open = false;
    }
    // public function toggleOpen()
    // {
    //     $this->open = !$this->open;
    //     //load playlist after first open
    //     if (!$this->loaded) {
    //         $this->loadPlaylists();
    //     }
    // }
    public function restorePlaylist($playlistId)
    {
        $playlist = Playlist::onlyTrashed()->find($playlistId);
        $playlist->restoreAtEnd();
        $this->emit('undeleted', $playlistId);
        $this->updatePlaylists();
        $this->emit('toast', 'Przywrócono: "' . $playlist->title . '"');
    }

    public function onPlaylistDelete()
    {
        $this->updatePlaylists();
    }
    public function onCategoryChange($categoryId)
    {
        $this->open = false;
        $this->category = Category::find($categoryId);
        $this->updatePlaylists();
    }

    public function render()
    {
        return view('livewire.deleted-playlists');
    }
}
