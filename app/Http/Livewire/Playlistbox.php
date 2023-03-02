<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Playlistbox extends Component
{
    public $playlist;
    public function render()
    {
        return view('livewire.playlistbox');
    }

    public function watch()
    {
        $this->playlist->watch();
    }
    public function unwatch()
    {
        $this->playlist->unwatch();
    }
    public function moveUp()
    {
/*todo: inremenet smaller*/
        $this->playlist->order=-1+$this->playlist->order;
        $this->playlist->save();
    }
    public function moveDown()
    {
        $this->playlist->order=1+$this->playlist->order;
        $this->playlist->save();
    }

}
