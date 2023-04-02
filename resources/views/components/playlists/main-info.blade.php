@props(['playlist'])

<h2 class="text-black font-medium text-lg">{{ $playlist->title }}</h2>
<div>
    <small class="text-sm text-gray-600 break-words" style="word-break:break-word;">{{ $playlist->description }}</small>
</div>
<div>
    <small class="">
        @if ($playlist->watchedAt != null)
            Ukończono: {{ $playlist->watchedAt }} (<button wire:click="unwatch('{{ $playlist->id }}')">Cofnij</button>)
        @endif
        &nbsp;
    </small>
    @if ($playlist->category_id != 1)
        <div class="rating">
            <x-playlists.rating :rating="$playlist->rating" :id="$playlist->id" />
        </div>
    @endif
</div>
