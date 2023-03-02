@props([])
<header {{ $attributes->merge(['class' => 'bg-gray-50 mb-8 drop-shadow-lg']) }}>
    <div class="max-w-7xl w-full mx-auto px-2 py-2 flex justify-between">
        <div>
            <a class="text-xl" href="{{ route('playlist.index') }}">{{ config('app.name') }}</a>
        </div>
        <div class=" flex gap-x-4">
        </div>
    </div>
</header>
