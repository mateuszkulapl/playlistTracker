<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class ShowTags extends Component
{
    public $tags;
    public $category;
    public $selectedTags = [];
 

    protected $listeners = ['tagCreated' => 'refresh','categorySelected' => 'categorySelected', 'tagDeleted' => 'refresh'];

    public function mount($category)
    {
        $this->category = $category;
        $this->tags =$category->tags()->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.show-tags');
    }

    public function refresh()
    {
        $this->tags = $this->category->tags()->orderBy('name')->get();
    }

    public function toggleSelect($tag_id)
    {
        if (in_array($tag_id, $this->selectedTags)) {
            $this->selectedTags = array_diff($this->selectedTags, [$tag_id]);
        } else {
            array_push($this->selectedTags, $tag_id);
        }
        $this->emit('tagsSelected', $this->selectedTags);
    }

    public function delete($tag_id)
    {
        $tag = Tag::find($tag_id);
        $tag->delete();
        $this->emit('tagDeleted');
    }

    public function categorySelected($category_id)
    {
        $this->category = Category::find($category_id);
        $this->refresh();
        $this->selectedTags = [];
    }
}
