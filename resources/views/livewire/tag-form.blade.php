<div class="mb-8">
    <form id="nowyTag" wire:submit.prevent="save">
        <input class="py-1 px-1  w-48 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500" type="text" wire:model="name" placeholder="Nazwa tagu">

        <button class="py-1 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-slate-900 text-gray-200  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm " type="submit">Dodaj</button>
    </form>
</div>
