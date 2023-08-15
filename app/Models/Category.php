<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    private $playlistCount = null;

    protected $fillable = ['name'];
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

    public function updatePlaylistCount()
    {
        $this->playlistCount = $this->playlists()->count();
    }

    public function watchedPercentage($updateTotal = false)
    {
        if ($this->playlistCount == null || $updateTotal) {
            $this->updatePlaylistCount();
        }
        $total = $this->playlistCount;
        if ($total == 0) {
            return 0;
        }
        $watched = $this->playlists()->whereNotNull('watchedAt')->count();
        return $watched / $total * 100;
    }

    public function inProgressPercentage($updateTotal = false)
    {
        if ($this->playlistCount == null || $updateTotal) {
            $this->updatePlaylistCount();
        }
        $total = $this->playlistCount;
        if ($total == 0) {
            return 0;
        }
        $progress = $this->playlists()->whereNull('watchedAt')->where('inprogress', true)->count();
        return $progress / $total * 100;
    }
}
