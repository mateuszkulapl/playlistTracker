<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Playlist;
use App\Models\Tag;
use Livewire\Component;

class IndexPlaylists extends Component
{
    public $playlists;
    public $percentage;
    public $progressPercentage;
    public $category;
    public $categories;
    public $tags;
    public $filterTags;

    protected $listeners = [
        'tagCreated' => 'afterTagChanged',
        'tagDeleted' => 'afterTagChanged',
        'tagsSelected' => 'filterByTags',
        'deleted' => 'reindex',
        'undeleted' => 'reindex',
        'moved' => '$refresh',
        'deleted' => '$refresh',
        'undeleted' => '$refresh',
    ];

    public function mount()
    {

        // $ps=Playlist::all();       
        // foreach ($ps as $key => $playlist) {
        //     $playlist->categories()->syncWithoutDetaching($playlist->category_id);
        // }


        $this->category = Category::first();
        $this->categories = Category::all();
        $this->tags = $this->category->tags()->orderBy('name')->get();
        $this->filterTags = collect();
        $this->getPlaylists();
    }

    public function refresh()
    {
        $this->getPlaylists();
        $this->categories = Category::all();
        $this->tags = $this->category->tags()->orderBy('name')->get();
        //$this->reindex(); //todo: delete this
    }

    public function afterTagCreated()
    {
        $this->tags = $this->category->tags()->orderBy('name')->get();
        $this->getPlaylists();
    }

    public function afterTagChanged()
    {
        $this->tags = $this->category->tags()->orderBy('name')->get();
        $this->getPlaylists();
    }

    public function filterByCategory($id)
    {
        $this->filterTags = collect();
        $this->category = Category::find($id);
        $this->refresh();

        $this->emit('categoryselected', $this->category->id);
    }

    public function getPlaylists()
    {
        $filterTags = $this->filterTags;
        if ($filterTags->count() > 0) {
            $this->playlists = $this->category->playlists()->with('tags')->whereHas('tags', function ($query) use ($filterTags) {
                $query->whereIn('id', $filterTags);
            })->orderBy('order')->get();
        } else {
            $this->playlists = $this->category->playlists()->with('tags')->orderBy('order')->get();
        }
    }
    public function moved()
    {
        $this->getPlaylists();
    }

    public function reindex()
    {
        $i = 1;
        foreach ($this->playlists as $key => $playlist) {
            if ($playlist->order != $i) {
                $playlist->order = $i;
                $playlist->save();
            }
            $i++;
        }
    }

    public function render()
    {
        return view('livewire.index-playlists');
    }



    public function filterByTags($tags)
    {
        $this->filterTags = collect();
        foreach ($tags as $tag_id) {
            $this->filterTags->push($tag_id);
        }
        $this->refresh();
    }
}
