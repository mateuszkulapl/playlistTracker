<div>
    <div class="mb-6 h-5 w-full bg-neutral-200 relative">
        <div class="h-5 bg-green-600 absolute z-20 text-xs font-bold text-white text-center" style="width: {{ $percentage }}%">{{ round($percentage, 1) }}%</div>
        <div class="h-5 bg-violet-600 absolute z-10 text-xs font-bold text-white text-center" style="width: {{ $progressPercentage }}%; margin-left: {{ $percentage }}%">{{ round($percentage + $progressPercentage, 1) }}%</div>

        <div class="progress-targets cursor-pointer">
            <span class="target absolute bg-slate-800 text-gray-200 rounded-sm p-1 text-xs transform -translate-x-1/2 -translate-y-full -top-1 z-40 hover:z-50 hover:shadow-md hover:shadow-white 
            after:absolute after:-bottom-1 after:w-3 after:h-3 after:left-1/2 after:border-1 after:border-slate-800 after:bg-slate-800 after:rotate-45 after:-z-10 after:-translate-x-1/2" style="margin-left:30%">
                Gofry Tani
            </span>
            <span class="target absolute bg-slate-800 text-gray-200 rounded-sm p-1 text-xs transform -translate-x-1/2 -translate-y-full -top-1 z-40 hover:z-50 hover:shadow-md hover:shadow-white 
        after:absolute after:-bottom-1 after:w-3 after:h-3 after:left-1/2 after:border-1 after:border-slate-800 after:bg-slate-800 after:rotate-45 after:-z-10 after:-translate-x-1/2" style="margin-left:50%">
               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Max_%28Restaurant%29_logo.svg/100px-Max_%28Restaurant%29_logo.svg.png" alt="MAX" class="h-8">
            </span>
            <span class="target absolute bg-slate-800 text-gray-200 rounded-sm p-1 text-xs transform -translate-x-1/2 -translate-y-full -top-1 z-40 hover:z-50 hover:shadow-md hover:shadow-white 
            after:absolute after:-bottom-1 after:w-3 after:h-3 after:left-1/2 after:border-1 after:border-slate-800 after:bg-slate-800 after:rotate-45 after:-z-10 after:-translate-x-1/2" style="margin-left:40%">
                Ciacho
            </span>
            <span class="target absolute bg-slate-800 text-gray-200 rounded-sm p-1 text-xs transform -translate-x-1/2 -translate-y-full -top-1 z-40 hover:z-50 hover:shadow-md hover:shadow-white 
            after:absolute after:-bottom-1 after:w-3 after:h-3 after:left-1/2 after:border-1 after:border-slate-800 after:bg-slate-800 after:rotate-45 after:-z-10 after:-translate-x-1/2" style="margin-left:60%">
                Pepsi
            </span>
        </div>
    </div>

    <div class="grid gap-4 gap-y-4">
        @foreach ($playlists as $key => $playlist)
            <div style="order:{{ $playlist->order }}" @class([
                'border-2 border-gray-200 shadow-md flex flex-col
                                                hover:-m-2
                                                hover:p-2 hover:z-10
                                                duration-100
                                                group 
                                                ',
                'watched bg bg-green-200 border-green-800' => $playlist->watchedAt != null,
                'watched bg bg-violet-200 border-violet-800' =>
                    $playlist->inprogress == true && $playlist->watchedAt == null,
                'bg-neutral-50 hover:bg-neutral-100' =>
                    $playlist->watchedAt == null && $playlist->inprogress != true,
            ])>
                <div class="flex flex-row align-middle justify-between ">
                    <div class="basis-1/12 flex flex-col justify-between items-center">
                        <span class="w-full ">
                            <div class="bg-slate-900 text-gray-200 rounded-br-xl p-1 w-10 text-right">#{{ $playlist->order }}</div>
                        </span>
                        <p class="cursor-pointer px-2 hover:text-green-900 font-bold hover:ring-1" wire:click="moveUp('{{ $playlist->id }}')">↑</p>
                        <p class="cursor-pointer px-2 hover:text-green-900 font-bold hover:ring-1" wire:click="moveDown('{{ $playlist->id }}')">↓</p>
                        <span></span>
                    </div>
                    <div class="basis-7/12 lg:basis-8/12 py-1 pl-2">
                        <h2 class="text-black font-medium text-lg">{{ $playlist->title }}</h2>
                        <div>
                            <small class="text-sm text-gray-600">{{ $playlist->description }}</small>
                        </div>
                        <div>
                            <small>
                                @if ($playlist->watchedAt != null)
                                    Ukończono: {{ $playlist->watchedAt }} (<button wire:click="unwatch('{{ $playlist->id }}')">Cofnij</button>)
                                @endif
                                &nbsp;
                            </small>
                        </div>
                    </div>

                    <div class=" flex flex-row basis-4/12 lg:basis-3/12 justify-between gap-2">
                        <div class="flex flex-col py-1 basis-4/12 justify-center items-end gap-y-2">
                            <a class="border border-blue-400 text-gray-600 px-2 rounded-2xl bg-sky-200 hover:border-blue-600 hover:bg-blue-50 hover:ring-1 hover:shadow-sm" href="https://www.youtube.com/playlist?list={{ $playlist->id }}" target="_blank">Otwórz</a>


                            @if ($playlist->watchedAt == null)
                                <button class="border bg-emerald-200 border-green-400 text-gray-600 px-2 rounded-2xl
                                    hover:border-green-600 hover:bg-green-50 hover:ring-1 hover:shadow-sm" wire:click="watch('{{ $playlist->id }}')">Ukończ</button>
                                @if ($playlist->inprogress != true)
                                    <button class="border bg-violet-200 border-violet-400 text-gray-600 px-2 rounded-2xl
                                hover:border-violet-600 hover:bg-green-50 hover:ring-1 hover:shadow-sm" wire:click="setProgress('{{ $playlist->id }}')">W trakcie</button>
                                @else
                                    <button class="border bg-violet-200 border-violet-400 text-gray-600 px-2 rounded-2xl
                                hover:border-violet-600 hover:bg-green-50 hover:ring-1 hover:shadow-sm" wire:click="setUnprogress('{{ $playlist->id }}')">Przerwij</button>
                                @endif
                            @endif
                            <button class="border bg-red-200 border-red-400 text-gray-600 px-2 rounded-2xl
                                        hover:border-red-600 hover:bg-red-50 hover:ring-1 hover:shadow-sm" wire:click="delete('{{ $playlist->id }}')">Usuń</button>
                        </div>
                        <div class="flex items-center basis-8/12 justify-end relative">
                            <span class="video-count absolute bottom-0 right-0 select-none cursor-pointer">
                                <div class="bg-slate-900 text-gray-200 rounded-tl-xl p-1 pl-2 text-right z-30" title="Liczba filmów">▶{{ $playlist->itemCount }}</div>
                            </span>
                            <img class="hover:scale-150 group-hover:scale-105 hover:z-20 duration-100" src="{{ $playlist->images()->medium->url }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <span class="bg bg-green-300 border-green-800"></span>
</div>
