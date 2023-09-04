<?php

namespace App\Models;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlist extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    use SoftDeletes;
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $casts = [
        'publishedAt' => 'datetime:Y-m-d H:i:s',
        'watchedAt' => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * Get the element's duration formatted.
     *
     * @return void
     */
    public function durationFormatted()
    {
        $d = $this->duration;
        if ($this->duration->h > 0) {
            return sprintf('%d:%02d:%02d', $d->h, $d->i, $d->s);
        } else {
            return sprintf('%d:%02d', $d->i, $d->s);
        }
    }

    /**
     * Interact with the element's duration.
     */
    protected function duration(): Attribute
    {
        return Attribute::make(
            get: fn (int|null $value) => CarbonInterval::create(0)
                ->seconds($value)
                ->cascade(),
            set: fn (CarbonInterval $value) => $value->totalSeconds,
        );
    }

    public function images($size = 'medium')
    {
        $im = json_decode($this->thumbnails);
        if (isset($im->$size)) {
            return $im->$size->url;
        } else {
            return '';
        }
    }

    public function watch()
    {
        $this->watchedAt = now();
        $this->save();
    }
    public function unwatch()
    {
        $this->watchedAt = null;
        $this->save();
    }
    /**
     * Move the playlist by offset, update all other playlists in the same category
     *
     * @param int $offset
     * @return boolean true if moved, false if not
     * 
     */
    public function moveBy($offset)
    {
        //move up
        if ($offset < 0) {
            $offset = max($offset, 1 - $this->order);
            if ($offset == 0)
                return false;
            $this->category
                ->playlists()
                ->where('order', '>=', $this->order + $offset)
                ->where('order', '<', $this->order)
                ->increment('order');
        } else {
            //move down
            if ($offset > 0) {
                $offset = min($offset, $this->category->playlists()->max('order') - $this->order);
                if ($offset == 0)
                    return false;
                $this->category
                    ->playlists()
                    ->where('order', '>', $this->order)
                    ->where('order', '<=', $this->order + $offset)
                    ->decrement('order');
            } else {
                //no move
                return false;
            }
        }
        $this->order = $this->order + $offset;
        $this->save();
        return true;
    }
    public function moveTo($targetPosition)
    {
        return $this->moveBy($targetPosition - $this->order);
    }

    public function getLink()
    {
        if (substr($this->id, 0, 2) == 'PL') {
            return 'https://www.youtube.com/playlist?list=' . $this->id;
        } else {
            return 'https://www.youtube.com/watch?v=' . $this->id;
        }
    }
    public function rate($rate)
    {
        $this->rating = $rate;
        $this->save();
    }
    public function setDifficulty($difficulty)
    {
        if ($difficulty > 5) {
            $difficulty = 5;
        }
        if ($difficulty < 1) {
            $difficulty = null;
        }
        $this->difficulty = $difficulty;
        $this->save();
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function moveToLast()
    {
        $this->order = $this->category->playlists()->where('id', '<>', $this->id)->max('order') + 1; //do not iclude itself, because it can have wrong order, eg. when it is restored
        $this->save();
    }

    public function changeCategory($newCategoryId)
    {
        //TODO: fix tags, tags are related to category
        $newCategory = Category::find($newCategoryId);
        if (!$newCategory) {
            return false;
        }
        $oldOrder = $this->order;
        $oldCategory = $this->category;
        $this->category()->associate($newCategory);
        $this->moveToLast();
        Playlist::where('category_id', $oldCategory->id)
            ->where('order', '>', $oldOrder)
            ->decrement('order');
        return true;
    }
}
