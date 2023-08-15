<div class="mb-1 pt-2" style="order:{{ $order }}">
    <form class="flex flex-row items-start justify-start gap-2" id="nowaNagroda" wire:submit.prevent="submit">
        @csrf
        <div class="flex flex-col">
            <input class="py-1 px-1  w-32 md:w-48 lg:w-64 xl:w-96 border border-gray-300 rounded-sm text-sm focus:border-blue-500 focus:ring-blue-500" type="text" placeholder="Nazwa nagrody" wire:model="name" wire:loading.attr="disabled" wire:target="submit">
            @error('name')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <input class="py-1 px-1 lg:px-2 w-24 border border-gray-300 rounded-sm text-sm focus:border-blue-500 focus:ring-blue-500" type="number" step="1" placeholder="Procent" wire:model="percentage" wire:loading.attr="disabled" wire:target="submit">
            @error('percentage')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <button class="py-1 px-1 lg:px-2 inline-flex justify-center items-center rounded-md border border-transparent font-semibold bg-slate-900 text-gray-200  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm " type="submit" wire:loading.remove wire:target="submit">
                @if ($awardId)
                    Zapisz
                @else
                    Dodaj
                @endif
            </button>
            <button class="py-1 px-1 lg:px-2 inline-flex justify-center items-center rounded-md border border-transparent font-semibold bg-slate-900 text-gray-200  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm " type="submit" wire:loading wire:target="submit">
                @if ($awardId)
                    Zapisywanie...
                @else
                    Dodawanie...
                @endif
            </button>
        </div>
        @if ($awardId)
            <span class="py-1 px-1 inline-flex justify-center items-center rounded-md border border-transparent font-semibold bg-red-900 text-gray-200  focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm cursor-pointer" wire:click="delete">
                Usuń
            </span>
        @endif
    </form>
</div>
