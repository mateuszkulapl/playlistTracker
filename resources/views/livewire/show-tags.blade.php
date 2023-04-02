<div class="flex flex-row gap-1 flex-wrap">
    @foreach ($tags as $tag)
        <span @class([
            'hover:ring-1 px-2 border mb-1',
            'bg-slate-100 text-gray-800' => !in_array($tag->id, $selectedTags),
            'bg-green-800 text-gray-50' => in_array($tag->id, $selectedTags),
        ])>
            <span class="cursor-pointer"
            
            wire:click="toggleSelect('{{ $tag->id }}')"> {{ $tag->name }}</span>
            <span class="delete text-red-600 pl-1 pr-1 ml-1 cursor-pointer"
            wire:click="delete('{{ $tag->id }}')"
            >X</span>
        </span>
    @endforeach
</div>
