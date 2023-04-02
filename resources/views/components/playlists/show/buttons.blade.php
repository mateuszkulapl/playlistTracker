@props(['playlist'])
<div class="flex flex-col align-middle h-full items-stretch justify-center">
    {{-- <div class="grid grid-cols-1 gap-1 lg:grid-cols-2 lg:gap-2">

        <a class="border border-blue-400 text-gray-600 px-2 rounded-2xl bg-sky-200 hover:border-blue-600 hover:bg-blue-50 hover:ring-1 hover:shadow-sm text-center" href="https://www.youtube.com/playlist?list={{ $playlist->id }}" target="_blank">Otwórz</a>


        @if ($playlist->watchedAt == null)
        <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 bg-green-200 shadow-green-500/50 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 bg-green-700 dark:focus:ring-green-200 shadow-green-700 dark:focus:ring-green-500/50" wire:click="watch('{{ $playlist->id }}')">Ukończ</button>

        @if ($playlist->inprogress != true)
                <button class="border bg-violet-200 border-violet-400 text-gray-600 px-2 rounded-2xl
            hover:border-violet-600 hover:bg-green-50 hover:ring-1 hover:shadow-sm  text-center" wire:click="setProgress('{{ $playlist->id }}')">W trakcie</button>
            @else
                <button class="border bg-violet-200 border-violet-400 text-gray-600 px-2 rounded-2xl
            hover:border-violet-600 hover:bg-green-50 hover:ring-1 hover:shadow-sm  text-center" wire:click="setUnprogress('{{ $playlist->id }}')">Przerwij</button>
            @endif
        @endif
        <button class="border bg-red-200 border-red-400 text-gray-600 px-2 rounded-2xl
                    hover:border-red-600 hover:bg-red-50 hover:ring-1 hover:shadow-sm  text-center" wire:click="delete('{{ $playlist->id }}')">Usuń</button>
    </div> --}}

    <div class="grid grid-cols-1 gap-1 lg:grid-cols-2 lg:gap-2 p-1">

        <x-playlists.show.button class="text-blue-700 border-blue-700 hover:bg-blue-800 bg-blue-200 shadow-blue-500/50 focus:ring-blue-300bg-blue-700" href="{{ $playlist->getLink() }}" target="_blank">Otwórz</x-playlists.button>


        @if ($playlist->watchedAt == null)
            <x-playlists.show.button class=" duratext-green-700 border-green-700 hover:bg-green-800 bg-green-200 shadow-green-500/50 focus:ring-green-300bg-green-700" wire:click="watch('{{ $playlist->id }}')">Ukończ</x-playlists.button>

            @if ($playlist->inprogress != true)
                <x-playlists.show.button class="text-violet-700 border-violet-700 hover:bg-violet-800 bg-violet-200 shadow-violet-500/50 focus:ring-violet-300bg-violet-700" wire:click="setProgress('{{ $playlist->id }}')">W trakcie</x-playlists.button>
            @else
                <x-playlists.show.button class="text-violet-700 border-violet-700 hover:bg-violet-800 bg-violet-200 shadow-violet-500/50 focus:ring-violet-300bg-violet-700" wire:click="setUnprogress('{{ $playlist->id }}')">Przerwij</x-playlists.button>
            @endif
        @endif
        <x-playlists.show.button class="text-red-700 border-red-700 hover:bg-red-800 bg-red-200 shadow-red-500/50 focus:ring-red-300bg-red-700" wire:click="watch('{{ $playlist->id }}')">Usuń</x-playlists.button>
    </div>
</div>
