<div wire:init="loadPlaylists">
    <div class="mb-8" id="categories">
        @foreach ($categories as $cat)
            <span @class([
                'cursor-pointer font-bold hover:ring-1 px-2 border',
                'bg-slate-100 text-gray-800 border-slate-300' => $cat->id !== $category->id,
                'bg-green-800 text-gray-50 border-green-900' => $cat->id == $category->id,
            ]) wire:click="filterByCategory('{{ $cat->id }}')">{{ $cat->name }}</span>
        @endforeach
    </div>

    @livewire('show-awards', ['category' => $category, 'percentage' => $percentage, 'progressPercentage' => $progressPercentage])
    @livewire('show-tags', ['category' => $category, 'tags' => $tags])
    @livewire('tag-form', ['category' => $category])
    <div class="flex flex-col w-full my-4">
        <div class="w-full" wire:loading.remove wire:target="filterByCategory">
            <div class="grid gap-4">
                @foreach ($playlists as $key => $playlist)
                    @livewire('show-element', ['playlist' => $playlist, 'allTags' => $tags, 'playlistsCount' => $playlists->max('order')], key(time() . $playlist->id))
                @endforeach
            </div>
        </div>
        <div class="w-full" wire:loading wire:target="filterByCategory">
            <div class="grid gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <x-playlists.show.loader />
                @endfor
            </div>
        </div>
        @if ($this->loaded == false)
            <div class="w-full">
                <div class="grid gap-4">
                    @for ($i = 0; $i < 5; $i++)
                        <x-playlists.show.loader />
                    @endfor
                </div>
            </div>
        @endif
    </div>

    @livewire('deleted-playlists', ['category' => $category])
</div>
