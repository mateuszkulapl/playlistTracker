<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowAwards extends Component
{
    public $category;
    public $percentage;
    public $progressPercentage;
    public $awards;

    protected $listeners = [
        'watched' => 'getPercentages',
        'unwatched' => 'getPercentages',
        'progressed' => 'getPercentages',
        'unprogressed' => 'getPercentages',
        'deleted' => 'getPercentages',
        'undeleted' => 'getPercentages',
        'categoryselected' => 'changeCategory',
        'awardsupdated' => 'getAwards',

    ];

    public function mount($category)
    {

        $this->category = $category;
        $this->getPercentages();
        $this->getAwards();
    }

    function getPercentages()
    {
        $playlistsCount = $this->category->playlists()->count();
        if ($playlistsCount == 0) {
            $this->percentage = 0;
            $this->progressPercentage = 0;
            return;
        }

        $this->percentage = $this->category->playlists()->whereNotNull('watchedAt')->count() / $playlistsCount * 100;
        $this->progressPercentage = $this->category->playlists()->whereNull('watchedAt')->where('inprogress', true)->count() / $playlistsCount * 100;
    }
    public function changeCategory($id)
    {
        $this->category = Category::find($id);

        $this->getPercentages();
        $this->getAwards();
    }

    public function getAwards()
    {
        $this->awards = $this->category->awards()->orderBy('percentage')->get();
    }

    public function render()
    {
        return view('livewire.show-awards');
    }
}
