@props(['playlist', 'playlistsCount', 'allTags'])
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
            <x-playlists.show.move-buttons :playlist="$playlist" :playlistsCount="$playlistsCount" />
            <span></span>
        </div>
        <div class="basis-6/12 lg:basis-7/12 py-1 pl-2">
            <x-playlists.show.main-info :playlist="$playlist" :allTags="$allTags" />
        </div>

        <div class=" flex basis-5/12 lg:basis-4/12 justify-between gap-2 flex-col-reverse sm:flex-row">
            <div class="basis-6/12">
                <x-playlists.show.buttons :playlist="$playlist" />
            </div>
            <div class="flex items-center basis-6/12 justify-end relative">
                @if ($playlist->itemCount > 1)
                    <span class="video-count absolute bottom-0 right-0 select-none cursor-pointer">
                        <div class="bg-slate-900 text-gray-200 rounded-tl-xl p-1 pl-2 text-right z-30" title="Liczba filmów">▶{{ $playlist->itemCount }}</div>
                    </span>
                @endif
                {{-- <img class="hover:scale-150 group-hover:scale-105 hover:z-20 duration-100" src="{{ $playlist->images()->default->url }}" alt="" {!! $playlist->order > 10 ? ' loading="lazy" ' : '' !!}> --}}
            </div>
        </div>
    </div>

</div>
