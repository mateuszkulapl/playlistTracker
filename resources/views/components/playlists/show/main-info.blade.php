@props(['playlist', 'allTags'])

<h2 class="text-black font-medium text-lg">{{ $playlist->title }}</h2>
<div>
    <small class="text-sm text-gray-600 break-words" style="word-break:break-word;">{{ $playlist->description }}</small>
</div>
<div>
    <small class="">
        @if ($playlist->watchedAt != null)
            Ukończono: <time title="{{ $playlist->watchedAt }}">{{ $playlist->watchedAt->locale('pl_PL')->diffForHumans() }}</time> (<button wire:click="unwatch()">Cofnij</button>)
        @endif
        &nbsp;
    </small>
    @if ($playlist->category_id != 1)
        <div class="rating">
            <x-playlists.show.rating :rating="$playlist->rating" :id="$playlist->id" />
        </div>
    @endif
    <x-playlists.show.tags :id="$playlist->id" :tags="$playlist->tags" :allTags="$allTags" />
</div>
