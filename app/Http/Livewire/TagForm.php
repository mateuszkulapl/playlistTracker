<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class TagForm extends Component
{

    public $name;
    public $category_id;

    protected $listeners = ['categoryselected' => 'categoryselected'];
    protected $rules = [
        'name' => 'required|string|min:3|max:50|unique:tags,name',
        'category_id' => 'required'
    ];

    public function categoryselected($category_id)
    {
        $this->category_id = $category_id;
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
        $this->emit('tagCreated', $tag);
    }

    public function render()
    {
        return view('livewire.tag-form');
    }
}
