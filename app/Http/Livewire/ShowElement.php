<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use Livewire\Component;

class ShowElement extends Component
{
    public $playlist;
    public $playlistsCount;
    public $allTags;

    protected $listeners = [];


    public function render()
    {
        return view('livewire.show-element');
    }
    public function refresh()
    {
        $this->playlist->tags = $this->playlist->tags()->get();
        // $this->playlist = Playlist::find($this->playlist->id)->with('tags')->first();
        // $this->playlist->tags = $this->playlist->tags()->get();

    }

    public function rate($rate)
    {
        $this->playlist->rate($rate);
        //$this->emit('rated');
    }

    public function setDifficulty($difficulty)
    {
        $this->playlist->setDifficulty($difficulty);
        //$this->emit('rated');
    }

    public function attachTag($tag_id)
    {
        $this->playlist->tags()->syncWithoutDetaching($tag_id);
        $this->refresh();
        //$this->emit('tagAttached');
    }
    public function detachTag($tag_id)
    {
        $this->playlist->tags()->detach($tag_id);
        $this->refresh();
        // $this->emit('tagDetached');
    }

    public function watch()
    {
        $this->playlist->watch();
        $this->emit('watched');
    }
    public function unwatch()
    {
        $this->playlist->unwatch();
        $this->emit('unwatched');
    }

    public function setProgress()
    {
        $this->playlist->inprogress = true;
        $this->playlist->save();
        $this->emit('progressed');
    }
    public function setUnprogress()
    {
        $this->playlist->inprogress = false;
        $this->playlist->save();
        $this->emit('unprogressed');
    }
    public function delete()
    {
        $this->playlist->delete();
        $this->emit('deleted');
    }
    public function undelete()
    {
        $this->playlist->undelete();
        $this->emit('undeleted');
    }

    public function moveUp()
    {
        $target = Playlist::where('order', ($this->playlist->order) - 1)->where('category_id',  $this->playlist->category_id)->first();
        if ($target) {
            $this->playlist->moveBy(-1);
            $target->moveBy(1);
            $this->emit('moved');
        }
    }
    public function moveDown()
    {
        $target = Playlist::where('order', ($this->playlist->order) + 1)->where('category_id',  $this->playlist->category_id)->first();
        if ($target) {
            $this->playlist->moveBy(1);
            $target->moveBy(-1);
            $this->emit('moved');
        }
    }
    public function moveTo($targetNumber)
    {
        //move id to target position, move all between id and target up or down
        if ($this->playlist->order < $targetNumber) //move down
        {
            foreach (Playlist::where('order', '>',  $this->playlist->order)->where('order', '<=', $targetNumber)->where('category_id',  $this->playlist->category_id)->get() as $playlist) {
                $playlist->moveBy(-1);
            }
        } else //move up
        {
            foreach (Playlist::where('order', '<',  $this->playlist->order)->where('order', '>=', $targetNumber)->where('category_id',  $this->playlist->category_id)->get() as $playlist) {
                $playlist->moveBy(1);
            }
        }
        $this->playlist->order = $targetNumber;
        $this->playlist->save();
        $this->emit('moved');
    }
}
