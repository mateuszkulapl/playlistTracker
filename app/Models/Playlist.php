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
     * Get the element's duration.
     *
     * @param  int  $value
     * @return CarbonInterval
     */
    public function getDurationAttribute($value)
    {
        return CarbonInterval::create(0)->seconds($value)->cascade();
    }


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
     * Set the element's duration.
     *
     * @param  CarbonInterval  $value
     * @return void
     */
    public function setDurationAttribute($value)
    {
        $this->attributes['duration'] = $value->totalSeconds;
    }
    // /**
    //  * Get the element's duration.
    //  */
    // protected function duration(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (int $value) => CarbonInterval::createFromFormat('%sS', $this->duration)
    //     );
    // }

    // /**
    //  * Interact with the element's duration.
    //  */
    // protected function duration(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => ucfirst($value),
    //         set: fn (string $value) => strtolower($value),
    //     );
    // }

    public function images($size = 'medium')
    {
        $im = json_decode($this->thumbnails);
        if (isset($im->$size)) {
            return $im->$size->url;
        } else {
            return "";
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
    // public function delete()
    // {
    //     $this->deletedAt=now();
    //     $this->save();
    // }
    // public function undelete()
    // {
    //     $this->deletedAt=null;
    //     $this->save();
    // }
    public function moveBy($offset)
    {
        $this->order = $this->order + $offset;
        $this->save();
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
        if ($difficulty > 5)
            $difficulty = 5;
        if ($difficulty < 1)
            $difficulty = null;
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

    public function restoreAtEnd()
    {
        $this->restore();
        $this->moveToLast();
    }
    public function moveToLast()
    {
        $this->order = $this->category->playlists()->max('order') + 1;
        $this->save();
    }
}
