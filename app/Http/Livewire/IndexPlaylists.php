<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Playlist;
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
    public $loaded;
    public $showCategoryForm = false;
    public $newCategoryName;

    protected $listeners = [
        'tagCreated' => 'onTagChange',
        'tagDeleted' => 'onTagChange',
        'tagsSelected' => 'onTagsSelect',
        'deleted' => 'onPlaylistDelete',
        'undeleted' => 'onPlaylistUndelete',
        'moved' => 'onMove',
        'playlistCreated' => 'onPlaylistCreate'
    ];


    public function mount()
    {
        $this->categories = Category::oldest()->get();
        $this->category = $this->categories->last();
        $this->updateTags();
        $this->filterTags = collect();
        $this->playlists = collect();
        $this->loaded = false;
        $this->newCategoryName = '';
    }

    public function loadPlaylists()
    {
        $this->updatePlalists();
        $this->loaded = true;
    }

    public function render()
    {
        return view('livewire.index-playlists');
    }

    public function updatePlalists()
    {
        if (!$this->category) {
            $this->playlists = collect();
            return;
        }
        $playlistQuery = $this->category->playlists()->with('tags');
        $playlistQuery = $this->appendTagsQueryIfNecessary($playlistQuery);
        $this->playlists = $playlistQuery->orderBy('order')->get();
    }
    public function updateTags()
    {
        if ($this->category)
            $this->tags = $this->category->tags()->orderBy('name')->get();
        else
            $this->tags = collect();
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

    /**
     * On playlist delete remove playlist from the list of playlists, decrement order of all playlists with higher order in database and in the list
     *
     * @param string $id
     * @param int $order
     * @return void
     */
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

    /**
     * On playlist undelete add playlist to the list of playlists at the end
     *
     * @param string $playlistId
     * @return void
     */
    public function onPlaylistUndelete($playlistId)
    {
        $this->onNewPlaylist($playlistId);
    }

    public function onPlaylistCreate($playlistId)
    {
        $this->onNewPlaylist($playlistId);
    }

    public function onNewPlaylist($playlistId)
    {
        $playlistQuery = Playlist::where('id', $playlistId)->where('category_id', $this->category->id);
        $playlistQuery = $this->appendTagsQueryIfNecessary($playlistQuery);
        $playlist = $playlistQuery->with('tags')->first();
        if ($playlist) {
            $this->playlists->push($playlist);
        };
    }

    private function appendTagsQueryIfNecessary($query)
    {
        $filterTags = $this->filterTags;
        if ($filterTags->count() > 0) {
            $query->whereHas('tags', function ($query) use ($filterTags) {
                $query->whereIn('id', $filterTags);
            });
        }
        return $query;
    }
    public function showCategoryForm()
    {
        $this->showCategoryForm = true;
    }
    public function addCategory()
    {
        $this->validate([
            'newCategoryName' => 'required|unique:categories,name'
        ]);
        $category = Category::create([
            'name' => $this->newCategoryName
        ]);
        $this->categories->push($category);
        $this->showCategoryForm = false;
        $this->newCategoryName = '';
        if (!$this->category) {
            $this->filterByCategory($category->id);
        }
    }
}
