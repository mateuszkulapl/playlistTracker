<div class="flex flex-row gap-1 flex-wrap items-center mb-2">
    @if ($channels->isNotEmpty())
        <span class="px-2 mb-1 cursor-pointer bg-slate-900 text-gray-200">Kanały</span>
        @foreach ($channels as $channel)
            <span @class([
                'pl-2 pr-1 inline-flex items-center hover:ring-1 mb-1',
                'bg-slate-100 text-gray-800' => !in_array($channel, $selectedChannels),
                'bg-green-800 text-gray-50' => in_array($channel, $selectedChannels),
            ])>
                <span class=" cursor-pointer"
                      wire:click="toggleSelect('{{ addslashes($channel) }}')">{{ $channel }}
                </span>
                <span @class([
                    'px-1 cursor-pointer py-1',
                ]) wire:click="importChannel('{{ addslashes($channel) }}')"
                   wire:loading.class="opacity-40"
                   wire:target="importChannel"
                   onclick="document.getElementById('import')?.scrollIntoView({behavior:'smooth'})"
                   title="Importuj filmy kanału">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" class="w-3.5 h-3.5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </span>
            </span>
        @endforeach
    @endif
</div>
