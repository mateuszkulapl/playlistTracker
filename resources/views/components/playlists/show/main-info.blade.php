@props(['playlist', 'allTags', 'allCategories'])

<div class="flex justify-between items-center gap-1 md:gap-2 lg:gap:4 ">
    <h2 class="text-black font-medium text-lg basis-8/12">{{ $playlist->title }}</h2>
    @if ($playlist->channelTitle)
        <p class="channel text-right basis-4/12">
            <span class="border px-1 border-gray-400 rounded-md p-1 mr-2 inline-block text-sm">{{ $playlist->channelTitle }}</span>
        </p>
    @endif
</div>
<div>
    <small class="text-sm text-gray-600 break-words" style="word-break:break-word;">{{ \Illuminate\Support\Str::limit($playlist->description, 130, '...') }}</small>
</div>
<div>
    @if ($playlist->watchedAt != null)
        <small>
            Ukończono: <time title="{{ $playlist->watchedAt }}">{{ $playlist->watchedAt->locale('pl_PL')->diffForHumans() }}</time> (<button wire:click="unwatch()">Cofnij</button>)
        </small>
    @endif
    <div class="flex flex-wrap items-center justify-start gap-1 md:gap-2">
        <x-playlists.show.difficulty :difficulty="$playlist->difficulty" :id="$playlist->id" />
        <div class="rating">
            <x-playlists.show.rating :rating="$playlist->rating" :id="$playlist->id" />
        </div>
        <x-playlists.show.tags :id="$playlist->id" :tags="$playlist->tags" :allTags="$allTags" />
        <x-playlists.show.change-category :id="$playlist->id" :category="$playlist->category" :allCategories="$allCategories" />
    </div>
</div>
