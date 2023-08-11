<div class="border-2 border-gray-200 shadow-md flex flex-col group bg-neutral-50">
    <div class="text-lg py-2 px-2 flex flex-row align-bottom justify-center cursor-pointer" wire:click="toggleOpen">
        <h3>Usunięte elementy</h3>
        <span @class(['transition', 'rotate-180' => $this->open])>
            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                <path d="M6 9l6 6 6-6"></path>
            </svg>
        </span>
    </div>
    <div id="deleted-list" @class(['block', 'hidden' => $this->open == false]) wire:loading.class="opacity-50 pointer-events-none">
        @if (!$this->playlists->isEmpty())
            <table class="w-full">
                <thead>
                    <tr class="border-b-2 border-b-gray-200">
                        <th class="font-bold text-left px-2">Tytuł</th>
                        <th class="font-bold text-left px-2">Usunięto</th>
                        <th class="font-bold text-left px-2">Akcja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->playlists as $playlist)
                        <tr class="hover:bg-gray-100 border-b border-b-gray-200">
                            <td class="px-2">{{ $playlist->title }}</td>
                            <td class="px-2">{{ $playlist->deleted_at->locale(env('CARBON_LOCALE', 'en'))->diffForHumans() }}</td>
                            <td class="px-2">
                                <button class="border border-gray-400 hover:bg-gray-200 text-gray-800 px-1 shadow-sm rounded-sm text-sm" wire:click="restorePlaylist('{{ $playlist->id }}')">Przywróć</button>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="text-center text-gray-500 py-2 px-2">
                <p>Brak usuniętych elementów</p>
            </div>
        @endif

    </div>
</div>
