<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowTags extends Component
{
    public $tags;
    public $category;
    public $selectedTags = [];

    public function mount($category, $tags)
    {
        $this->category = $category;
        $this->tags = $tags;
    }

    public function render()
    {
        return view('livewire.show-tags');
    }

    #[On('tagCreated')]
    #[On('tagDeleted')]
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
        $this->dispatch('tagsSelected', $this->selectedTags);
    }

    public function delete($tag_id)
    {
        $tag = Tag::find($tag_id);
        $tag->delete();
        $this->dispatch('tagDeleted');
    }

    #[On('categorySelected')]
    public function categoryselected($categoryId)
    {
        $this->category = Category::find($categoryId);
        $this->refresh();
        $this->selectedTags = [];
    }
}
