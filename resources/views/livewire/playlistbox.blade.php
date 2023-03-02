   <div @class([
       'watched bg bg-green-300 border-green-800' => $playlist->watchedAt != null,
       'border-2 border-gray-200 shadow-md flex flex-col',
   ])
   style="order:{{ $playlist->order }}"
   >
       <div class="flex flex-row align-middle justify-between">
           <div class="basis-1/12 flex flex-col justify-evenly items-center">
               <p wire:click="moveUp" class="cursor-pointer px-2 hover:text-green-900 font-bold">↑</p>
               <p wire:click="moveDown" class="cursor-pointer px-2 hover:text-green-900 font-bold">↓</p>
           </div>
           <div class="basis-7/12 lg:basis-8/12 py-1 pl-2">
               <h2 class="text-black font-medium text-lg">#{{ $playlist->order }}{{ $playlist->title }}</h2>
               <div>
                   <small class="text-sm text-gray-600">{{ $playlist->description }}</small>
               </div>
               @if ($playlist->watchedAt != null)
                   <div>
                       Ukończono: {{ $playlist->watchedAt }} (<button wire:click="unwatch">Cofnij</button>)
                   </div>
               @endif
           </div>
           <div class=" flex flex-row basis-4/12 lg:basis-3/12 justify-between gap-2">
               <div class="flex flex-col py-1 basis-8/12 justify-around items-end">
                   <span class="float-right ml-4">{{ $playlist->itemCount }}</span>
                   <a class="
                   border border-blue-400 text-gray-600 px-2 rounded-2xl
                   hover:border-blue-600 hover:bg-blue-50 hover:ring-1 hover:shadow-sm
                   " href="https://www.youtube.com/playlist?list={{ $playlist->id }}">Otwórz</a>
                   @if ($playlist->watchedAt == null)
                       <button wire:click="watch">Ukończ</button>
                   @endif
               </div>
               <div class="flex items-center basis-4/12 justify-end">
                   <img class="" src="{{ $playlist->images()->default->url }}" alt="">
               </div>
           </div>
       </div>

   </div>
