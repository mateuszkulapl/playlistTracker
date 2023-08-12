<div class="tags flex gap-0.5">
    @foreach ($tags as $tag)
        <div class="tag-name text-gray-700 rounded-sm">
            <span @class(['py-0.5 bg-gray-200 text-xs px-1'])>
                {{ $tag->name }}
            </span>
            <span class="delete rounded-l-none rounded-r-full bg-rose-800 text-xs font-bold text-white pl-1 pr-2 py-0.5 cursor-pointer " wire:click="detachTag({{ $tag->id }})">X</span>
        </div>
    @endforeach
    <div class="relative group/addtag">
        <div @class([
            'tag-add-btn text-gray-700 rounded-sm',
            'rounded-r-full',
            'cursor-pointer',
        ])>
            <span @class(['py-0.5 bg-gray-200 text-xs pl-1'])>
                Dodaj tag...
            </span>
            <span class="add rounded-l-none rounded-r-full bg-green-800 text-xs font-bold text-white pl-1 pr-2 py-0.5">+</span>
            </span>
        </div>
        <div class="add-tag-list absolute z-40 hidden flex-col w-max group-hover/addtag:flex divide-x divide-y rounded-sm shadow-gray-700 shadow-md">
            <a class="tag-name bg-gray-200 hover:bg-green-200 text-gray-700 border border-gray-300  text-xs rounded-sm cursor-pointer py-0.5 px-1" href="#nowyTag">
                Dodaj nowy
            </a>
            @foreach ($allTags as $allTag)
                @if (!$tags->contains($allTag->id))
                    <span class="tag-name bg-gray-200 hover:bg-green-200 text-gray-700 border border-gray-300  text-xs rounded-sm cursor-pointer py-0.5 px-1" wire:click="attachTag({{ $allTag->id }})">
                        {{ $allTag->name }}
                    </span>
                @endif
            @endforeach
        </div>
    </div>
</div>
