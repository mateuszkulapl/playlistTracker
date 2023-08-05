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
        $this->percentage = $this->category->watchedPercentage();
        $this->progressPercentage = $this->category->inProgressPercentage();
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
