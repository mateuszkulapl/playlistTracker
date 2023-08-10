<div class="w-full mb-5 pt-11 pb-1 bg-slate-50 px-4 rounded-md">

    <div class="h-5 w-full bg-neutral-200 relative">
        <div class="h-5 bg-green-600 absolute z-20 text-xs font-bold text-white text-center text-shadow" style="width: {{ $percentage }}%">{{ round($percentage, 1) }}%</div>
        @if ($progressPercentage > 0)
            <div class="h-5 bg-violet-600 absolute z-10 text-xs font-bold text-white text-center text-shadow" style="width: {{ $progressPercentage }}%; margin-left: {{ $percentage }}%">
                @if ($progressPercentage > 0.5)
                    {{ round($percentage + $progressPercentage, 1) }}%
                @endif
            </div>
        @endif

        <div class="progress-targets cursor-pointer">
            @foreach ($awards as $award)
                <span class="target absolute  {{ $percentage > $award->percentage ? 'bg-green-600' : 'bg-slate-800' }}  text-gray-200
                    border-2 border-gray-200 
                    rounded-sm p-1 text-xs transform -translate-x-1/2 -translate-y-full -top-1 z-40 hover:z-50 hover:shadow-md hover:shadow-white 
                after:absolute after:-bottom-1 after:w-3 after:h-3 after:left-1/2 after:border-1 after:border-inherit after:bg-inherit after:rotate-45 after:-z-10 after:-translate-x-1/2" title="{{ $award->percentage }}" style="margin-left:{{ $award->percentage }}%">
                    {!! $award->show() !!}
                </span>
                <span class="h-8 w-8 hidden"></span>
            @endforeach

        </div>
    </div>


    <details class="group mt-4 bg-gray-200 px-2">
        <summary class="flex justify-center items-center font-medium cursor-pointer list-none gap-4">
            <span>Edytuj nagrody</span>
            <span class="transition group-open:rotate-180">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                    <path d="M6 9l6 6 6-6"></path>
                </svg>
            </span>
        </summary>

        <div class="flex flex-wrap justify-center">
            <p class="basis-full text-center">Podaj tekst lub url grafiki</p>
            <div class="flex flex-col divide-y ">
                @livewire('edit-award', ['category' => $category, 'award' => null], key($category->id . '-' . 'new'))
                @foreach ($awards as $award)
                    @livewire('edit-award', ['category' => $category, 'award' => $award], key($category->id . '-' . $award->id))
                @endforeach
            </div>
        </div>
    </details>




</div>
