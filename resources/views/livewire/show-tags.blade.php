<div class="flex flex-row gap-1 flex-wrap items-center mb-2">
    @if ($tags->isNotEmpty())
        <span class="px-2 mb-1 cursor-pointer bg-slate-900 text-gray-200">Tagi</span>
        @foreach ($tags as $tag)
            <span @class([
                'hover:ring-1 pl-2 mb-1',
                'bg-slate-100 text-gray-800' => !in_array($tag->id, $selectedTags),
                'bg-green-800 text-gray-50' => in_array($tag->id, $selectedTags),
            ])>
                <span class="cursor-pointer"
                wire:click="toggleSelect('{{ $tag->id }}')"> {{ $tag->name }}</span>

                <span class="delete bg-red-900 text-slate-50 pl-1 pr-1 ml-1 cursor-pointer inline-block"
                wire:click="delete('{{ $tag->id }}')"
                >usuń</span>
            </span>
        @endforeach
    @endif
</div>
