<div wire:init="loadPlaylists">

    <x-categories.show :categories="$categories" :category="$category" />
    @livewire('manage-categories')

    @if ($this->category)
        @livewire('show-awards', ['category' => $category, 'percentage' => $percentage, 'progressPercentage' => $progressPercentage])
        @livewire('show-channels', ['category' => $category])
        @livewire('show-tags', ['category' => $category, 'tags' => $tags])
        @livewire('tag-form', ['category' => $category])
    @endif

    <div class="flex flex-col w-full my-4">
        @if ($loaded)
            <div class="w-full" wire:loading.remove wire:target="filterByCategory, onTagsSelect, onChannelsSelect">
                <div class="grid gap-4">
                    @forelse ($playlists as $playlist)
                        @livewire('show-element', ['playlist' => $playlist, 'allTags' => $tags, 'allCategories' => $categories, 'playlistsCount' => $playlists->max('order')], key(time() . $playlist->id))
                    @empty
                        <div class="shadow-md flex flex-col group border-2 border-gray-200 bg-neutral-50 py-2 px-2">
                            <p class="text-center text-xl mx-2 my-2">Brak elementów</p>
                        </div>
                    @endforelse
                </div>
            </div>
        @endif
        <div class="w-full" wire:loading wire:target="filterByCategory, onTagsSelect, onChannelsSelect">
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

    @if ($this->category)
        @livewire('deleted-playlists', ['category' => $category])
        @livewire('import-form', ['category' => $category])
    @endif

</div>
