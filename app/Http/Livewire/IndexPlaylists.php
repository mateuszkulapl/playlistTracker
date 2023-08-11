<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Playlist;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
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
        'tagCreated' => 'onTagChange',
        'tagDeleted' => 'onTagChange',
        'tagsSelected' => 'onTagsSelect',
        'deleted' => 'onPlaylistDelete',
        'undeleted' => 'onPlaylistUndelete',
        'moved' => 'onMove',
    ];


    public function mount()
    {
        $this->category = Category::latest()->first();
        $this->categories = Category::all();
        $this->updateTags();
        $this->filterTags = collect();
        $this->updatePlalists();
    }

    public function render()
    {
        return view('livewire.index-playlists');
    }

    public function updatePlalists()
    {
        $filterTags = $this->filterTags;
        if ($filterTags->count() > 0) {
            $this->playlists = $this->category->playlists()->with('tags')->whereHas('tags', function ($query) use ($filterTags) {
                $query->whereIn('id', $filterTags);
            })->orderBy('order')->get();
        } else {
            $this->playlists = $this->category->playlists()->with('tags')->orderBy('order')->get();
            $this->updateOrderIfNecessary(); //TODO: delete
        }
    }
    public function updateTags()
    {
        $this->tags = $this->category->tags()->orderBy('name')->get();
    }

    public function updateOrderIfNecessary()
    {
        $this->playlists->each(function ($playlist, $key) {
            if ($playlist->order != $key + 1) {
                $playlist->order = $key + 1;
                $playlist->save();
            }
        });
    }

    public function filterByCategory($id)
    {
        $this->filterTags = collect();
        $this->category = Category::find($id);
        $this->updatePlalists();
        $this->updateTags();
        $this->emit('categorySelected', $this->category->id);
    }

    public function onTagChange()
    {
        $this->tags = $this->category->tags()->orderBy('name')->get();
        $this->updatePlalists();
    }

    public function onMove()
    {
        $this->updatePlalists();
    }

    public function onTagsSelect($tags)
    {
        $this->filterTags = collect();
        foreach ($tags as $tag_id) {
            $this->filterTags->push($tag_id);
        }
        $this->updatePlalists();
    }

    public function onPlaylistDelete($id, $order)
    {
        DB::table('playlists')->where('order', '>', $order)->where('category_id', $this->category->id)->decrement('order');
        $this->playlists = $this->playlists->reject(function ($playlist) use ($id) {
            return $playlist->id == $id;
        });
        //do the same for the playlists to not run additional queries
        $this->playlists->where('order', '>', $order)->each(function ($playlist) {
            $playlist->order--;
        });
    }

    public function onPlaylistUndelete()
    {
        $this->updatePlalists();
    }
}
