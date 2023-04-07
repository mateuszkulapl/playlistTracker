@props([])
<header {{ $attributes->merge(['class' => 'bg-gray-50 mb-8 drop-shadow-lg']) }}>
    <div class="max-w-7xl w-full mx-auto px-2 py-2 flex justify-between">
        <div class="">
            <a class="text-xl gap-x-2 flex items-center" href="{{ route('playlist.index') }}">
                <img src="/img/icon.png" alt="icon" class="h-10 w-10">
                <span>{{ config('app.name') }}</span>
            </a>
        </div>
        <div class=" flex gap-x-4">
        </div>
    </div>
</header>
