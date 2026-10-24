<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowAwards extends Component
{
    public $category;
    public $percentage;
    public $progressPercentage;
    public $awards;

    public function mount($category)
    {

        $this->category = $category;
        $this->getPercentages();
        $this->getAwards();
    }

    #[On('watched')]
    #[On('unwatched')]
    #[On('progressed')]
    #[On('unprogressed')]
    #[On('deleted')]
    #[On('undeleted')]
    public function getPercentages()
    {
        $this->percentage = $this->category->watchedPercentage(true);
        $this->progressPercentage = $this->category->inProgressPercentage();
    }
    #[On('categorySelected')]
    public function changeCategory($categoryId)
    {
        $this->category = Category::find($categoryId);

        $this->getPercentages();
        $this->getAwards();
    }

    #[On('awardsupdated')]
    public function getAwards()
    {
        $this->awards = $this->category->awards()->orderBy('percentage')->get();
    }

    public function render()
    {
        return view('livewire.show-awards');
    }
}
