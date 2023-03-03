<div>
    <div class="mb-6 h-5 w-full bg-neutral-200 dark:bg-neutral-600">
        <div class="h-5 bg-green-600" style="width: {{ $percentage }}%"></div>
    </div>

    <div class="grid gap-4 gap-y-4">
        @foreach ($playlists as $key => $playlist)
            <div style="order:{{ $playlist->order }}" @class([
                'watched bg bg-green-300 border-green-800' => $playlist->watchedAt != null,
                'border-2 border-gray-200 shadow-md flex flex-col
                hover:-m-2
                hover:p-2 hover:z-10
                hover:bg-neutral-100
                duration-100
                bg-neutral-50
                group 
                ',
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
</div>
