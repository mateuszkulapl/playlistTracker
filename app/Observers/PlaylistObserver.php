<?php

namespace App\Observers;

use App\Models\Playlist;
use Illuminate\Support\Facades\Log;

class PlaylistObserver
{
    /**
     * Handle the Playlist "created" event.
     */
    public function created(Playlist $playlist): void
    {
        //
    }

    /**
     * Handle the Playlist "updated" event.
     */
    public function updated(Playlist $playlist): void
    {
        //
    }

    /**
     * Handle the Playlist "deleted" event.
     */
    public function deleted(Playlist $playlist): void
    {
        $playlist->category
            ->playlists()
            ->where('order', '>', $playlist->order)
            ->decrement('order');
    }

    /**
     * Handle the Playlist "restored" event.
     */
    public function restored(Playlist $playlist): void
    {
        $playlist->moveToLast();
    }

    /**
     * Handle the Playlist "force deleted" event.
     */
    public function forceDeleted(Playlist $playlist): void
    {
        //
    }
}
