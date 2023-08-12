<div class="border-2 border-gray-200 shadow-md flex flex-col group bg-neutral-50">
    <div class="text-lg py-2 px-2 flex flex-row align-bottom justify-center cursor-pointer" @if ($this->open) wire:click="close"
    @else
    wire:click="open" @endif>
        <h3>Usunięte elementy</h3>
        <span @class(['transition', 'rotate-180' => $this->open])>
            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                <path d="M6 9l6 6 6-6"></path>
            </svg>
        </span>
    </div>
    <div id="deleted-list" @class(['block', 'hidden' => $this->open == false]) wire:loading.class="opacity-50 pointer-events-none" wire:loading.remove wire:target="close">
        @if (!$this->playlists->isEmpty())
            <x-playlists.deleted.table>
                @foreach ($this->playlists as $playlist)
                    <tr class="hover:bg-gray-100 border-b border-b-gray-200">
                        <td class="px-2">{{ $playlist->title }}</td>
                        <td class="px-2">{{ $playlist->deleted_at->locale(env('CARBON_LOCALE', 'en'))->diffForHumans() }}</td>
                        <td class="px-2">
                            <button class="border border-gray-400 hover:bg-gray-200 text-gray-800 px-1 shadow-sm rounded-sm text-sm" wire:click="restorePlaylist('{{ $playlist->id }}')">Przywróć</button>
                        </td>
                    </tr>
                @endforeach
                </x-deleted-playlist-table>
            @else
                <div class="text-center text-gray-500 py-2 px-2">
                    <p>Brak usuniętych elementów</p>
                </div>
        @endif
    </div>
    <div class="pointer-events-none animate-pulse" wire:loading wire:target="open">
        <x-playlists.deleted.table>
            @for ($i = 0; $i < 5; $i++)
                <tr class="hover:bg-gray-100 border-b border-b-gray-200">
                    <td class="px-2">
                        <div class="h-2 bg-slate-300 rounded"></div>
                    </td>
                    <td class="px-2">
                        <div class="h-2 bg-slate-300 rounded"></div>
                    </td>
                    <td class="px-2">
                        <button class="border border-gray-400 hover:bg-gray-200 text-gray-800 px-1 shadow-sm rounded-sm text-sm">Przywróć</button>
                    </td>
                </tr>
            @endfor
        </x-playlists.deleted.table>
    </div>
</div>
