@props(['categories', 'category', 'showCategoryForm', 'newCategoryName'])
<div class="mb-8" id="categories">
    <div class="flex flex-row flex-wrap gap-1">
        @foreach ($categories as $cat)
            <span @class([
                'cursor-pointer font-bold hover:ring-1 px-2 border ',
                'bg-slate-100 text-gray-800 border-slate-300' => $cat->id !== $category->id,
                'bg-green-800 text-gray-50 border-green-900' => $cat->id == $category->id,
            ]) wire:click="filterByCategory('{{ $cat->id }}')">{{ $cat->name }}</span>
        @endforeach
        <span @class([
            'cursor-pointer font-bold hover:ring-1 px-2 border',
            'bg-slate-100 text-gray-800 border-slate-300',
        ]) wire:click="showCategoryForm()">Dodaj kategorię</span>
    </div>

    @if ($showCategoryForm)
        <div class="mb-1 pt-2">
            <form class="" id="nowaKategoria" wire:submit.prevent="addCategory">
                @csrf
                <div class="flex flex-col items-start justify-start gap-1">
                    <div>
                        <input class="py-1 px-1  w-48 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500" name="NazwaKategorii" type="text" placeholder="Nazwa kategorii" wire:model="newCategoryName" wire:loading.attr="disabled" wire:target="addCategory" autofocus>
                        <button class="py-1 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-slate-900 text-gray-200  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm " type="submit" wire:loading.attr="disabled">
                            Dodaj
                        </button>
                        <div class="py-1 px-1  bg-slate-50 border-gray-300 rounded-sm text-sm" wire:loading wire:target="addCategory">
                            Dodawanie...
                        </div>
                    </div>
                    @error('newCategoryName')
                        <div class="bg-slate-50 p-1">
                            <span class="text-red-400">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </form>
        </div>
    @endif
</div>
