<div class="mb-8">
    <button wire:click="toggle"
            class="mt-2 px-2 mb-1 cursor-pointer bg-slate-900 text-gray-200">
        {{ $isOpen ? 'Zamknij' : 'Edytuj kategorie' }}
    </button>

    @if ($isOpen)
        <div class="mt-2 bg-white border border-gray-200 rounded-md shadow-lg p-4">

            <div class="flex flex-col divide-y divide-gray-100">
                @forelse ($categories as $cat)
                    @if ($editingCategoryId == $cat->id)
                        <div class="py-2.5 flex flex-col gap-1.5">
                            <form wire:submit.prevent="updateCategory" class="flex items-center gap-2">
                                <input wire:model="editingCategoryName" type="text" autofocus
                                       class="py-1 px-2 w-52 border border-gray-300 rounded text-sm focus:border-blue-500 focus:ring-blue-500">
                                <button type="submit"
                                        class="py-1 px-3 text-sm font-medium bg-slate-800 text-white rounded hover:bg-slate-700">
                                    Zapisz
                                </button>
                                <button type="button" wire:click="cancelEdit"
                                        class="py-1 px-3 text-sm font-medium border border-gray-300 text-gray-500 rounded hover:bg-gray-50">
                                    Anuluj
                                </button>
                            </form>
                            @error('editingCategoryName')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                    @elseif ($confirmDeleteCategoryId == $cat->id)
                        <div class="py-3 px-3 -mx-4 bg-red-50 border-y border-red-200 flex flex-col gap-2.5">
                            <p class="text-sm font-medium text-red-900">
                                Usunąć <strong>{{ $cat->name }}</strong>?
                                <span class="font-normal">Wszystkie playlisty i tagi zostaną trwale usunięte.</span>
                            </p>
                            <div class="flex gap-2">
                                <button wire:click="deleteCategory({{ $cat->id }})"
                                        class="py-1 px-3 text-sm font-semibold bg-red-600 text-white rounded border border-red-700 hover:bg-red-700">
                                    Tak, usuń
                                </button>
                                <button wire:click="cancelDelete"
                                        class="py-1 px-3 text-sm font-medium border border-gray-300 text-gray-600 rounded hover:bg-gray-50 bg-white">
                                    Anuluj
                                </button>
                            </div>
                        </div>

                    @else
                        <div class="py-2 flex items-center gap-3 justify-between">
                            <span class="text-sm text-gray-800">{{ $cat->name }}</span>
                            <div>
                                <button wire:click="startEdit({{ $cat->id }})"
                                        class="text-xs py-0.5 px-2 border border-gray-300 text-gray-600 rounded hover:bg-gray-100">
                                    Zmień nazwę
                                </button>
                                @if ($categories->count() > 1)
                                    <button wire:click="confirmDelete({{ $cat->id }})"
                                            class="text-xs py-0.5 px-2 border border-red-200 text-red-600 rounded hover:bg-red-50">
                                        Usuń
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endif
                @empty
                    <p class="py-2 text-sm text-gray-400">Brak kategorii.</p>
                @endforelse
            </div>

            <div class="mt-3 pt-3 border-t border-gray-100">
                @if ($showAddForm)
                    <form wire:submit.prevent="addCategory" class="flex flex-col gap-1.5">
                        <div class="flex items-center gap-2">
                            <input wire:model="newCategoryName" type="text" placeholder="Nazwa kategorii" autofocus
                                   class="py-1 px-2 w-52 border border-gray-200 rounded text-sm focus:border-blue-500 focus:ring-blue-500">
                            <button type="submit"
                                    class="py-1 px-3 text-sm font-medium bg-slate-800 text-white rounded hover:bg-slate-700">
                                Dodaj
                            </button>
                            <button type="button" wire:click="$set('showAddForm', false)"
                                    class="py-1 px-3 text-sm font-medium border border-gray-300 text-gray-500 rounded hover:bg-gray-50">
                                Anuluj
                            </button>
                        </div>
                        @error('newCategoryName')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </form>
                @else
                    <button wire:click="openAddForm"
                            class="text-sm py-1 px-3 border border-dashed border-gray-300 text-gray-600 rounded hover:bg-gray-50 hover:border-gray-400">
                        + Dodaj kategorię
                    </button>
                @endif
            </div>

        </div>
    @endif
</div>
