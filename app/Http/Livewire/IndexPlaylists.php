<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Playlist;
use Livewire\Component;

class IndexPlaylists extends Component
{
    public $playlists;
    public $percentage;
    public $progressPercentage;
    public $category;
    public $categories;
    public function mount()
    {
        $this->category = Category::find(1);
        $this->getPlaylists();
        $this->categories = Category::all();
    }

    public function refresh()
    {
        $this->getPlaylists();
        $this->categories = Category::all();
    }
    public function filterByCategory($id)
    {
        $this->category = Category::find($id);
        $this->refresh();
    }

    public function getPlaylists()
    {
        $this->playlists = $this->category->playlists->fresh()->sortBy('order');
        if ($this->playlists->count() == 0) {
            $this->percentage = 0;
            $this->progressPercentage = 0;
        } else {
            $this->percentage = $this->playlists->where('watchedAt', '!=', null)->count() / $this->playlists->count() * 100;
            $this->progressPercentage = $this->playlists->where('watchedAt', '==', null)->where('inprogress', '==', true)->count() / $this->playlists->count() * 100;
        }
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
        $this->refresh();
        $this->emit('watched');
    }
    public function unwatch($id)
    {
        $edit = Playlist::find($id);
        $edit->unwatch();
        $this->refresh();
        $this->emit('unwatched');
    }

    public function setProgress($id)
    {
        $edit = Playlist::find($id);
        $edit->inprogress = true;
        $edit->save();
        $this->refresh();
        $this->emit('progressed');
    }
    public function setUnprogress($id)
    {
        $edit = Playlist::find($id);
        $edit->inprogress = false;
        $edit->save();
        $this->refresh();
        $this->emit('unprogressed');
    }
    public function delete($id)
    {
        $edit = Playlist::find($id);
        $edit->delete();
        $this->reindex();
        $this->refresh();
        $this->emit('deleted');
    }
    public function undelete($id)
    {
        $edit = Playlist::find($id);
        $edit->undelete();
        $this->reindex();
        $this->refresh();
        $this->emit('undeleted');
    }

    public function moveUp($id)
    {
        $edit = Playlist::find($id);
        $target = Playlist::where('order', ($edit->order) - 1)->where('category_id',$edit->category_id)->first();
        if ($edit && $target) {
            $edit->moveBy(-1);
            $target->moveBy(1);

            $this->refresh();
            $this->emit('moved');
        }
    }
    public function moveDown($id)
    {
        $edit = Playlist::find($id);
        $target = Playlist::where('order', ($edit->order) + 1)->where('category_id',$edit->category_id)->first();
        if ($edit && $target) {
            $edit->moveBy(1);
            $target->moveBy(-1);

            $this->refresh();
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
                foreach (Playlist::where('order', '>', $edit->order)->where('order', '<=', $targetNumber)->where('category_id',$edit->category_id)->get() as $playlist) {
                    $playlist->moveBy(-1);
                }
            } else //move up
            {
                foreach ($ps = Playlist::where('order', '<', $edit->order)->where('order', '>=', $targetNumber)->where('category_id',$edit->category_id)->get() as $playlist) {
                    $playlist->moveBy(1);
                }
            }
            $edit->order = $targetNumber;
            $edit->save();
            $this->refresh();
            $this->emit('moved');
        }
    }
}
