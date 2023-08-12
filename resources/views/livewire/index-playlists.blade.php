<div>
    <div class="mb-8" id="categories">
        @foreach ($categories as $cat)
            <span class="cursor-pointer font-bold hover:ring-1 px-2 border bg-slate-100 " wire:click="filterByCategory('{{ $cat->id }}')">{{ $cat->name }}</span>
        @endforeach
    </div>

    @livewire('show-awards', ['category' => $category, 'percentage' => $percentage, 'progressPercentage' => $progressPercentage])
    @livewire('show-tags', ['category' => $category, 'tags' => $tags])
    @livewire('tag-form', ['category' => $category])

    <div class="grid gap-4 gap-y-4 my-4">
        @foreach ($playlists as $key => $playlist)
            @livewire('show-element', ['playlist' => $playlist, 'allTags' => $tags, 'playlistsCount' => $playlists->count()], key(time() . $playlist->id))
        @endforeach
    </div>
    @livewire('deleted-playlists', ['category' => $category])
</div>
