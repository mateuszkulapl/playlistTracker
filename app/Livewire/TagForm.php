<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Component;

class TagForm extends Component
{

    public $name;
    public $category_id;
    protected $rules = [
        'name' => 'required|string|min:3|max:50|unique:tags,name',
        'category_id' => 'required'
    ];

    #[On('categorySelected')]
    public function categoryselected($categoryId)
    {
        $this->category_id = $categoryId;
    }

    public function mount($category)
    {
        $this->category_id = $category->id;
    }
    public function save()
    {
        $this->validate();

        $tag = new Tag();
        $tag->name = $this->name;
        $tag->category()->associate($this->category_id);
        $tag->save();
        $this->name = '';
        $this->dispatch('tagCreated');
    }

    public function render()
    {
        return view('livewire.tag-form');
    }
}
