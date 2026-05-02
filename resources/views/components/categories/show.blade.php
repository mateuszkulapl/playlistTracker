@props(['categories', 'category'])
<div id="categories">
    <div class="flex flex-row flex-wrap gap-1">
        @foreach ($categories as $cat)
            <span @class([
                'cursor-pointer font-bold hover:ring-1 px-2 py-0.5 border',
                'bg-slate-100 text-gray-800 border-slate-300' => $cat->id !== $category?->id,
                'bg-green-800 text-gray-50 border-green-900' => $cat->id == $category?->id,
            ]) wire:click="filterByCategory('{{ $cat->id }}')">{{ $cat->name }}</span>
        @endforeach
    </div>
</div>
