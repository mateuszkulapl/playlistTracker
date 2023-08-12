<div>
    <div class="mb-8" id="categories">
        @foreach ($categories as $cat)
            <span class="cursor-pointer font-bold hover:ring-1 px-2 border bg-slate-100 " @class([
                'cursor-pointer font-bold hover:ring-1 px-2 border',
                'bg-slate-100 text-gray-800 border-slate-300' => $cat->id !== $category->id,
                'bg-green-800 text-gray-50 border-green-900' => $cat->id == $category->id,
            ]) wire:click="filterByCategory('{{ $cat->id }}')">{{ $cat->name }}</span>
        @endforeach
    </div>

    @livewire('show-awards', ['category' => $category, 'percentage' => $percentage, 'progressPercentage' => $progressPercentage])
    @livewire('show-tags', ['category' => $category, 'tags' => $tags])
    @livewire('tag-form', ['category' => $category])

    <div class="w-full" wire:loading.delay wire:target="filterByCategory">
        <div class="grid gap-4 my-4">
            @for ($i = 0; $i < 5; $i++)
                <x-playlists.show.loader />
            @endfor
        </div>
    </div>
    <div class="grid gap-4 my-4" wire:loading.remove wire:target="filterByCategory">
        @foreach ($playlists as $key => $playlist)
            @livewire('show-element', ['playlist' => $playlist, 'allTags' => $tags, 'playlistsCount' => $playlists->max('order')], key(time() . $playlist->id))
        @endforeach
    </div>
    @livewire('deleted-playlists', ['category' => $category])
</div>
