<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use Livewire\Component;

class IndexPlaylists extends Component
{
    public $playlists;
    public $percentage;

    public function mount()
    {
        $this->getPlaylists();
    }

    public function getPlaylists()
    {
        $this->playlists = Playlist::all()->sortBy('order');
        $this->percentage = $this->playlists->where('watchedAt', '!=', null)->count() / $this->playlists->count() * 100;
        $i = 1;
        foreach ($this->playlists as $key => $playlist) {
            if ($playlist->order != $i) {
                $playlist->order = $i;
                $playlist->save();
            }
            $i++;
        }
    }

    public function render()
    {
        return view('livewire.index-playlists');
    }

    public function watch($id)
    {
        $edit = Playlist::find($id);
        $edit->watch();
        $this->mount();
        $this->emit('watched');
    }
    public function unwatch($id)
    {
        $edit = Playlist::find($id);
        $edit->unwatch();
        $this->mount();
        $this->emit('unwatched');
    }

    public function setProgress($id)
    {
        $edit = Playlist::find($id);
        $edit->inprogress=true;
        $edit->save();
        $this->mount();
        $this->emit('progressed');
    }
    public function setUnprogress($id)
    {
        $edit = Playlist::find($id);
        $edit->inprogress=false;
        $edit->save();
        $this->mount();
        $this->emit('unprogressed');
    }
    public function delete($id)
    {
        $edit = Playlist::find($id);
        $edit->delete();
        $this->mount();
        $this->emit('deleted');
    }
    public function undelete($id)
    {
        $edit = Playlist::find($id);
        $edit->undelete();
        $this->mount();
        $this->emit('undeleted');
    }

    public function moveUp($id)
    {
        $edit = Playlist::find($id);
        $target = Playlist::where('order', ($edit->order) - 1)->first();
        if ($edit && $target) {
            $edit->moveBy(-1);
            $target->moveBy(1);
            $edit->save();
            $target->save();

            $this->mount();
            $this->emit('moved');
        }
    }
    public function moveDown($id)
    {
        $edit = Playlist::find($id);
        $target = Playlist::where('order', ($edit->order) + 1)->first();
        if ($edit && $target) {
            $edit->moveBy(1);
            $target->moveBy(-1);
            $edit->save();
            $target->save();

            $this->mount();
            $this->emit('moved');
        }
    }
}
