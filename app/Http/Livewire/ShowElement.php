<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use Livewire\Component;

class ShowElement extends Component
{
    public $playlist;
    public $playlistsCount;
    public $allTags;
    public $allCategories;

    protected $listeners = [];


    public function render()
    {
        return view('livewire.show-element');
    }
    public function refresh()
    {
        $this->playlist->tags = $this->playlist->tags()->get();
        // $this->playlist = Playlist::find($this->playlist->id)->with('tags')->first();
    }

    public function rate($rate)
    {
        $this->playlist->rate($rate);
    }

    public function setDifficulty($difficulty)
    {
        $this->playlist->setDifficulty($difficulty);
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
        $this->emit('deleted', $this->playlist->id, $this->playlist->order);
        $this->emit('toast', 'Usunięto: "' . $this->playlist->title . '"');
    }

    public function moveUp()
    {
        if ($this->playlist->moveBy(-1)) {
            $this->emit('moved');
        }
    }
    public function moveDown()
    {
        if ($this->playlist->moveBy(1)) {
            $this->emit('moved');
        }
    }
    public function moveTo($targetOrder)
    {
        //move id to target position, move all between id and target up or down
        $this->playlist->moveTo($targetOrder);
        $this->emit('moved');
    }

    public function changeElementCategory($new_category_id)
    {
        $oldCategoryOrder = $this->playlist->order;
        if ($this->playlist->changeCategory($new_category_id)) {
            $this->emit('changedElementCategory', $this->playlist->id, $oldCategoryOrder);
            $this->emit('toast', 'Zmieniono kategorię');
        }
    }
}
