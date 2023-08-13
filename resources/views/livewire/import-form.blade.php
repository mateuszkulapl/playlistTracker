<div class="border-2 border-gray-200 shadow-md flex flex-col group bg-neutral-50 my-4 p-2" id="import">
    <h3 class="text-lg py-2 px-2 text-center">Importuj do kategorii {{ $categoryName }}</h3>
    <form class="flex flex-col gap-2 mb-4" wire:submit.prevent="import">
        @csrf
        <div class="flex gap-2 flex-row">
            <label for="links">Linki do filmów lub playlisty</label>
            <div class="w-full">
                <textarea class="border-2 border-gray-200 rounded-md p-2 w-full" id="links" type="text" wire:model.defer="links" placeholder="Wklej link do jednej playlisty albo jednego lub wielu filmów z YouTube">
                </textarea>
                @if (session()->has('error'))
                    <div class="alert text-red-500">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="flex justify-end">
            <button class="text-center font-medium text-base 
                rounded-lg py-2 px-4 
                shadow-lg
                transition duration-400  
                text-gray-800 bg-slate-50
                hover:text-white hover:bg-green-600
                active:bg-green-700 active:ring-green-900
                ring-1 ring-slate-300 hover:ring-green-800 hover:ring-1 focus:ring-2 ring-offset-0
                focus:outline-none " type="submit">Importuj</button>
        </div>
    </form>


    <div id="importnewElement">
        @if (!$newElements->isEmpty())
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="font-bold">
                    <th class="px-2 py-1 border-b border-gray-200 ">Id</th>
                    <th class="px-2 py-1 border-b border-gray-200 ">Tytuł</th>
                    <th class="px-2 py-1 border-b border-gray-200 ">Długość</th>
                    <th class="px-2 py-1 border-b border-gray-200 ">Akcje</th>
                </thead>
                <tbody>
                    @foreach ($newElements as $newElement)
                        <tr>
                            <td class="px-2 py-1 border-b border-gray-200">{{ $newElement->id }}</td>
                            <td class="px-2 py-1 border-b border-gray-200">{{ $newElement->title ? $newElement->title : '-' }}</td>
                            <td class="px-2 py-1 border-b border-gray-200">{{ $newElement->title ? $newElement->durationFormatted() : '-' }}</td>
                            </td>
                            <td class="px-2 py-1 border-b border-gray-200">
                                @if ($newElement->alreadyExists)
                                    <span class="my-2 py-1">Istnieje</span>
                                @else
                                    @if ($newElement->title == null)
                                        <span class="my-2 py-1">Nie znaleziono</span>
                                    @else
                                        <button class="text-center font-medium text-sm rounded-sm py-1 px-2 shadow-sm transition duration-400 text-gray-800 bg-slate-50 hover:text-white hover:bg-green-600 active:bg-green-700 active:ring-green-900 ring-1 ring-slate-300 hover:ring-green-800 hover:ring-1 focus:ring-2 ring-offset-0 focus:outline-none" wire:click="add('{{ $newElement->id }}')">Dodaj</button>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
