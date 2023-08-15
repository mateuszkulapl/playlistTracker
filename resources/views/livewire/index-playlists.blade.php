<div wire:init="loadPlaylists">

    <x-categories.show :categories="$categories" :category="$category" :showCategoryForm="$showCategoryForm" :newCategoryName="$newCategoryName" />

    @if ($this->category)
        @livewire('show-awards', ['category' => $category, 'percentage' => $percentage, 'progressPercentage' => $progressPercentage])
        @livewire('show-tags', ['category' => $category, 'tags' => $tags])
        @livewire('tag-form', ['category' => $category])
    @endif
    <div class="flex flex-col w-full my-4">
        @if ($loaded)
            <div class="w-full" wire:loading.remove wire:target="filterByCategory">
                <div class="grid gap-4">
                    @forelse ($playlists as $playlist)
                        @livewire('show-element', ['playlist' => $playlist, 'allTags' => $tags, 'playlistsCount' => $playlists->max('order')], key(time() . $playlist->id))
                    @empty
                        <div class="shadow-md flex flex-col group border-2 border-gray-200 bg-neutral-50 py-2 px-2 ">
                            <p class="text-center text-xl mb-4">Brak elementów</p>
                            @if ($category == null)
                                <p class="text-center  my-2">
                                    <span class="bg-emerald-300 text-emerald-900 hover:bg-emerald-400 font-bold border border-green-900 px-2 py-1 cursor-pointer shadow-sm rounded-md" wire:click="showCategoryForm()">Dodaj pierwszą kategorię</span>
                                </p>
                            @endif
                        </div>
                    @endforelse
                </div>
            </div>
        @endif
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

    @if ($this->category)
        @livewire('deleted-playlists', ['category' => $category])
        @livewire('import-form', ['category' => $category])
    @endif

</div>
