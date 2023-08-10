@props(['playlist'])
<div class="flex flex-col align-middle h-full items-stretch justify-center">
    <div class="grid grid-cols-1 gap-1 lg:grid-cols-2 lg:gap-2 p-1">

        <x-playlists.show.button class="text-blue-700 border-blue-700 hover:bg-blue-800 bg-blue-200 shadow-blue-500/50 focus:ring-blue-300bg-blue-700" href="{{ $playlist->getLink() }}" target="_blank">Otwórz</x-playlists.show.button>
        
        @if ($playlist->watchedAt == null)
            <x-playlists.show.button class=" duratext-green-700 border-green-700 hover:bg-green-800 bg-green-200 shadow-green-500/50 focus:ring-green-300bg-green-700 endbutton" wire:click="watch()">Ukończ</x-playlists.show.button>

            @if ($playlist->inprogress != true)
                <x-playlists.show.button class="text-violet-700 border-violet-700 hover:bg-violet-800 bg-violet-200 shadow-violet-500/50 focus:ring-violet-300bg-violet-700" wire:click="setProgress()">W trakcie</x-playlists.show.button>
            @else
                <x-playlists.show.button class="text-violet-700 border-violet-700 hover:bg-violet-800 bg-violet-200 shadow-violet-500/50 focus:ring-violet-300bg-violet-700" wire:click="setUnprogress()">Przerwij</x-playlists.show.button>
            @endif
        @endif
        <x-playlists.show.button class="text-red-700 border-red-700 hover:bg-red-800 bg-red-200 shadow-red-500/50 focus:ring-red-300bg-red-700" wire:click="delete()">Usuń</x-playlists.show.button>
    </div>
</div>
