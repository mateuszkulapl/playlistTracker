<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;


    // public function playlists()
    // {
    //     return $this->hasMany(Playlist::class);
    // }

    /**
     * Get all of the playlists.
     */
    public function playlists():HasMany
    {
        return $this->hasMany(Playlist::class);
    }

    public function tags():HasMany
    {
        return $this->hasMany(Tag::class);
    }
}
