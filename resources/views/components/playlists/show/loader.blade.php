<div class="shadow-md flex flex-col group relative border-2 border-gray-200 bg-neutral-50" style="order:1">
    <div @class(['flex flex-row align-middle justify-between animate-pulse'])>
        <div class="basis-1/12 flex flex-col justify-between items-center">
            <span></span>
            <span class="w-3 h-4 bg-gray-300 rounded-md block"></span>
            <span class="w-3 h-4 bg-gray-300 rounded-md block"></span>
            <span></span>
        </div>
        <div class="basis-6/12 lg:basis-7/12 py-1 pl-2">
            <div class="flex justify-between items-center gap-1 md:gap-2 lg:gap:4 ">
                {{-- Title --}}
                <h2 class="text-black font-medium text-lg basis-8/12"><span class="h-7 bg-gray-400 rounded-md block w-full mb-2"></span></h2>
                {{-- Channel --}}
                <p class="channel text-right basis-4/12">
                    <span class="border px-1 border-gray-300 rounded-md p-1 mr-2 inline-block text-sm"><span class="h-4 bg-gray-200 rounded-sm block w-20"></span></span>
                </p>
            </div>
            <div>
                <small class="text-sm text-gray-600 break-words" style="word-break:break-word;">
                    {{-- Description --}}
                    <span class="h-5 bg-gray-300 rounded-md block w-full mb-1"></span>
                    {{-- Description 2nd line --}}
                    <span class="h-5 bg-gray-300 rounded-md block w-3/12  mb-2"></span>
                </small>
            </div>
            <div class="flex flex-wrap items-center justify-start gap-1 md:gap-2">
                {{-- Difficulty --}}
                <span class="w-7 h-7 mr-1 rounded block bg-gray-300"></span>

                {{-- Stars --}}
                <span class="h-4 bg-gray-300 rounded-md inline-block w-24 mb-1"></span>

                {{-- Tags --}}
                <span class="h-4 bg-gray-300 rounded-md block w-28 mb-1"></span>
            </div>
        </div>

        <div class=" flex basis-5/12 lg:basis-4/12 justify-between gap-2 flex-col-reverse sm:flex-row">
            <div class="basis-6/12 flex flex-col align-middle h-full items-stretch justify-center">
                <div class="grid grid-cols-1 gap-1 lg:grid-cols-2 lg:gap-2 p-1">
                    {{-- Buttons --}}
                    <span class="h-6 bg-gray-300 block w-full rounded-lg"></span>
                    <span class="h-6 bg-gray-300 block w-full rounded-lg"></span>
                    <span class="h-6 bg-gray-300 block w-full rounded-lg"></span>
                    <span class="h-6 bg-gray-300 block w-full rounded-lg"></span>
                </div>
            </div>
            <div class="flex items-center basis-6/12 justify-end">
                {{-- Video thumbnail --}}
                <div class="bg-gray-300 rounded-md w-full aspect-video"></div>
            </div>
        </div>
    </div>
</div>
