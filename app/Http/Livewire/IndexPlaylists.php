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

    protected $listeners = ['tagCreated' => 'afterTagCreated', 'tagsSelected' => 'filterByTags'];

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
    }
    public function filterByCategory($id)
    {
        $this->filterTags = collect();
        $this->category = Category::find($id);
        $this->refresh();

        $this->emit('categorySelected', $this->category->id);
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

        if ($this->playlists->count() == 0) {
            $this->percentage = 0;
            $this->progressPercentage = 0;
        } else {
            $this->percentage = $this->playlists->where('watchedAt', '!=', null)->count() / $this->playlists->count() * 100;
            $this->progressPercentage = $this->playlists->where('watchedAt', '==', null)->where('inprogress', '==', true)->count() / $this->playlists->count() * 100;
        }
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
    public function rate($id, $rate)
    {
        $edit = Playlist::find($id);
        $edit->rate($rate);
        $this->refresh();
        $this->emit('rated');
    }

    public function attachTag($id, $tag_id)
    {
        $edit = Playlist::find($id);
        $edit->tags()->syncWithoutDetaching($tag_id);
        $this->refresh();
        $this->emit('tagAttached');
    }
    public function detachTag($id, $tag_id)
    {
        $edit = Playlist::find($id);
        $edit->tags()->detach($tag_id);
        $this->refresh();
        $this->emit('tagDetached');
    }

    public function watch($id)
    {
        $edit = Playlist::find($id);
        $edit->watch();
        $this->refresh();
        $this->emit('watched');
    }
    public function unwatch($id)
    {
        $edit = Playlist::find($id);
        $edit->unwatch();
        $this->refresh();
        $this->emit('unwatched');
    }

    public function setProgress($id)
    {
        $edit = Playlist::find($id);
        $edit->inprogress = true;
        $edit->save();
        $this->refresh();
        $this->emit('progressed');
    }
    public function setUnprogress($id)
    {
        $edit = Playlist::find($id);
        $edit->inprogress = false;
        $edit->save();
        $this->refresh();
        $this->emit('unprogressed');
    }
    public function delete($id)
    {
        $edit = Playlist::find($id);
        $edit->delete();
        $this->reindex();
        $this->refresh();
        $this->emit('deleted');
    }
    public function undelete($id)
    {
        $edit = Playlist::find($id);
        $edit->undelete();
        $this->reindex();
        $this->refresh();
        $this->emit('undeleted');
    }

    public function moveUp($id)
    {
        $edit = Playlist::find($id);
        $target = Playlist::where('order', ($edit->order) - 1)->where('category_id', $edit->category_id)->first();
        if ($edit && $target) {
            $edit->moveBy(-1);
            $target->moveBy(1);

            $this->refresh();
            $this->emit('moved');
        }
    }
    public function moveDown($id)
    {
        $edit = Playlist::find($id);
        $target = Playlist::where('order', ($edit->order) + 1)->where('category_id', $edit->category_id)->first();
        if ($edit && $target) {
            $edit->moveBy(1);
            $target->moveBy(-1);

            $this->refresh();
            $this->emit('moved');
        }
    }
    public function moveTo($id, $targetNumber)
    {
        //move id to target position, move all between id and target up or down
        $edit = Playlist::find($id);
        if ($edit) {
            if ($edit->order < $targetNumber) //move down
            {
                foreach (Playlist::where('order', '>', $edit->order)->where('order', '<=', $targetNumber)->where('category_id', $edit->category_id)->get() as $playlist) {
                    $playlist->moveBy(-1);
                }
            } else //move up
            {
                foreach ($ps = Playlist::where('order', '<', $edit->order)->where('order', '>=', $targetNumber)->where('category_id', $edit->category_id)->get() as $playlist) {
                    $playlist->moveBy(1);
                }
            }
            $edit->order = $targetNumber;
            $edit->save();
            $this->refresh();
            $this->emit('moved');
        }
    }


    public function filterByTags($tags)
    {
        $this->filterTags=collect();
        foreach ($tags as $tag_id) {
            $this->filterTags->push($tag_id);
        }
        $this->refresh();
    }
}
