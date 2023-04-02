<div>
    <div class="mb-8" id="categories">
        @foreach ($categories as $cat)
            <span class="cursor-pointer font-bold hover:ring-1 px-2 border bg-slate-100 " wire:click="filterByCategory('{{ $cat->id }}')">{{ $cat->name }}</span>
        @endforeach
    </div>
    @if ($category->id == 1 && $filterTags->count() == 0)
        <x-playlists.targets :percentage="$percentage" :progressPercentage="$progressPercentage" />
    @endif
    
    @livewire('show-tags', ['category' => $category])
    @livewire('tag-form', ['category' => $category])
    
    <div class="grid gap-4 gap-y-4">
        @foreach ($playlists as $key => $playlist)
            <x-playlists.show.index :playlist="$playlist" :allTags="$tags" :playlistsCount="$playlists->count()" />
        @endforeach
    </div>
    <span class="bg bg-green-300 border-green-800"></span>
</div>
