<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * Get all of the playlists.
     */
    public function playlists(): HasMany
    {
        return $this->hasMany(Playlist::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }
    public function awards(): HasMany
    {
        return $this->hasMany(Award::class);
    }

    public function watchedPercentage()
    {
        $total = $this->playlists()->count();
        if ($total == 0) {
            return 0;
        }
        $watched = $this->playlists()->whereNotNull('watchedAt')->count();
        return $watched / $total * 100;
    }

    public function inProgressPercentage()
    {
        $total = $this->playlists()->count();
        if ($total == 0) {
            return 0;
        }
        $progress = $this->playlists()->whereNull('watchedAt')->where('inprogress', true)->count();
        return $progress / $total * 100;
    }
}
