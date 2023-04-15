@props(['playlist', 'playlistsCount'])
@if ($playlist->order > 1)
    <div class=" hover:text-green-900 relative group/move w-6 h-6">
        <span class="cursor-pointer font-bold hover:ring-1 px-2" wire:click="moveUp()">↑</span>
        <div @class([
            'targetPosition hidden bg-gray-700 text-gray-200 text-center absolute z-50 group-hover/move:grid rounded-md shadow-md left-6 p-1',
            '-bottom-6',
            'gap-1',
            'grid-cols-5 w-48' => $playlist->order - 1 <= 25,
            'grid-cols-10 w-96' => $playlist->order - 1 > 25,
        ])>
            <p class="text-center col-span-full">Przesuń na pozycję</p>
            @for ($i = 1; $i < $playlist->order; $i++)
                <span class="py-1 cursor-pointer font-thin text-xs hover:bg-gray-600 border rounded-sm border-gray-800 text-center" wire:click="moveTo({{ $i }})">{{ $i }}</span>
            @endfor
        </div>
    </div>
@endif
@if ($playlist->order < $playlistsCount)
    <div class=" hover:text-green-900 relative group/move w-6 h-6">
        <span class="cursor-pointer font-bold hover:ring-1 px-2" wire:click="moveDown()">↓</span>
        <div @class([
            'targetPosition hidden bg-gray-700 text-gray-200 text-center absolute z-50 group-hover/move:grid rounded-md shadow-md left-6 p-1',
            '-top-6',
            'gap-1',
            'grid-cols-5 w-48' => $playlistsCount - $playlist->order <= 25,
            'grid-cols-10 w-96' => $playlistsCount - $playlist->order > 25,
        ])>
            <p class="text-center col-span-full">Przesuń na pozycję</p>
            @for ($i = $playlist->order + 1; $i <= $playlistsCount; $i++)
                <span class="py-1 cursor-pointer font-thin text-sm hover:bg-gray-600 border rounded-sm border-gray-800 text-center" wire:click="moveTo({{ $i }})">{{ $i }}</span>
            @endfor
        </div>
    </div>
@endif
