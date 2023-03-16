<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use Livewire\Component;

class IndexPlaylists extends Component
{
    public $playlists;
    public $percentage;
    public $progressPercentage;

    public function mount()
    {
        $this->getPlaylists();
    }

    public function getPlaylists()
    {
        $this->playlists = Playlist::all()->sortBy('order');
        $this->percentage = $this->playlists->where('watchedAt', '!=', null)->count() / $this->playlists->count() * 100;
        $this->progressPercentage = $this->playlists->where('watchedAt', '==', null)->where('inprogress', '==', true)->count() / $this->playlists->count() * 100;
    }
    
    public function reindex()
    {
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
        $edit->inprogress = true;
        $edit->save();
        $this->mount();
        $this->emit('progressed');
    }
    public function setUnprogress($id)
    {
        $edit = Playlist::find($id);
        $edit->inprogress = false;
        $edit->save();
        $this->mount();
        $this->emit('unprogressed');
    }
    public function delete($id)
    {
        $edit = Playlist::find($id);
        $edit->delete();
        $this->reindex();
        $this->mount();
        $this->emit('deleted');
    }
    public function undelete($id)
    {
        $edit = Playlist::find($id);
        $edit->undelete();
        $this->reindex();
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

            $this->mount();
            $this->emit('moved');
        }
    }
    public function moveTo($id, $targetNumber)
    {
        //move id to target position, move all between id and target up or down
        $edit = Playlist::find($id);
        if ($edit) {
            if ($edit->order < $targetNumber) //move down
            {
                foreach (Playlist::where('order', '>', $edit->order)->where('order', '<=', $targetNumber)->get() as $playlist) {
                    $playlist->moveBy(-1);
                }
            } else //move up
            {
                foreach ($ps = Playlist::where('order', '<', $edit->order)->where('order', '>=', $targetNumber)->get() as $playlist) {
                    $playlist->moveBy(1);
                }
            }
            $edit->order = $targetNumber;
            $edit->save();
            $this->mount();
            $this->emit('moved');
        }
    }
}
