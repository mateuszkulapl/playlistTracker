<div class="relative group/changecat">
    <div @class([
        'text-gray-700 rounded-sm',
        'rounded-r-full',
        'cursor-pointer',
    ])>
        <span @class(['py-0.5 bg-gray-200 text-xs pl-1'])>
            Zmień kategorię
        </span>
        <span class="add rounded-l-none rounded-r-full bg-green-800 text-xs font-bold text-white pl-1 pr-2 py-0.5">✎</span>
        </span>
    </div>
    <div class="absolute z-40 hidden flex-col w-full group-hover/changecat:flex divide-x divide-y rounded-sm shadow-gray-700 shadow-md">
        @foreach ($allCategories as $allCategory)
            @if ($allCategory->id != $category->id)
                <span class="bg-gray-200 hover:bg-green-200 text-gray-700 border border-gray-300  text-xs rounded-sm cursor-pointer py-0.5 px-1" wire:click="changeElementCategory({{ $allCategory->id }})">
                    {{ $allCategory->name }}
                </span>
            @endif
        @endforeach
    </div>
</div>
