<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ManageCategories extends Component
{
    public $categories;
    public $isOpen = false;

    public $showAddForm = false;
    public $newCategoryName = '';

    public $editingCategoryId = null;
    public $editingCategoryName = '';

    public $confirmDeleteCategoryId = null;

    public function mount()
    {
        $this->categories = Category::oldest()->get();
    }

    public function render()
    {
        return view('livewire.manage-categories');
    }

    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
        if (!$this->isOpen) {
            $this->resetPanel();
        }
    }

    private function resetPanel()
    {
        $this->editingCategoryId = null;
        $this->editingCategoryName = '';
        $this->confirmDeleteCategoryId = null;
        $this->showAddForm = false;
        $this->newCategoryName = '';
    }

    public function openAddForm()
    {
        $this->showAddForm = true;
        $this->editingCategoryId = null;
        $this->confirmDeleteCategoryId = null;
    }

    public function addCategory()
    {
        $this->validate(['newCategoryName' => 'required|unique:categories,name']);
        $category = Category::create(['name' => $this->newCategoryName]);
        $this->categories->push($category);
        $this->newCategoryName = '';
        $this->showAddForm = false;
        $this->emit('categoryAdded', $category->id);
    }

    public function startEdit($id)
    {
        $this->editingCategoryId = $id;
        $cat = $this->categories->firstWhere('id', $id);
        $this->editingCategoryName = $cat ? $cat->name : '';
        $this->confirmDeleteCategoryId = null;
        $this->showAddForm = false;
    }

    public function cancelEdit()
    {
        $this->editingCategoryId = null;
        $this->editingCategoryName = '';
    }

    public function updateCategory()
    {
        $this->validate(['editingCategoryName' => 'required|unique:categories,name,' . $this->editingCategoryId]);
        $cat = Category::find($this->editingCategoryId);
        $cat->update(['name' => $this->editingCategoryName]);
        $this->categories = $this->categories->map(function ($c) use ($cat) {
            if ($c->id == $cat->id) {
                $c->name = $cat->name;
            }
            return $c;
        });
        $this->editingCategoryId = null;
        $this->editingCategoryName = '';
        $this->emit('categoryRenamed', $cat->id, $cat->name);
    }

    public function confirmDelete($id)
    {
        if ($this->categories->count() <= 1) {
            return;
        }
        $this->confirmDeleteCategoryId = $id;
        $this->editingCategoryId = null;
        $this->showAddForm = false;
    }

    public function cancelDelete()
    {
        $this->confirmDeleteCategoryId = null;
    }

    public function deleteCategory($id)
    {
        $cat = Category::find($id);
        if (!$cat) return;

        $cat->playlists()->delete();
        $cat->tags()->delete();
        $cat->awards()->delete();
        $cat->delete();

        $this->categories = $this->categories->reject(fn($c) => $c->id == $id)->values();
        $this->confirmDeleteCategoryId = null;
        $nextCategoryId = $this->categories->last()?->id;
        $this->emit('categoryDeleted', $id, $nextCategoryId);
    }
}
