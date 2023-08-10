<div class="fixed z-90 bottom-24 right-8 border-1 w-96 h-auto z-30">
    <div class="flex flex-col-reverse" id="toasts">

    </div>
    <template id="toast-template">
        <div class="toats bg-white text-gray-800 shadow-md rounded-sm p-2 font-bold text-right mt-2 border border-gray-200 flex flex-row gap-5 align-top ">
            <div class="toast-msg break-words"></div>
            {{-- <span class="toast-close p-1 cursor-pointer" title="Zamknij">X</span> --}}
        </div>
    </template>
</div>
