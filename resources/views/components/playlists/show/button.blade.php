
@if (isset($attributes['href']))
    <a {{$attributes->merge(['class' => 'transition duration-400 shadow-lg hover:text-white border-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm py-1 px-0.5 text-center mr-2 mb-2 '])}} >
        {{ $slot }}
    </a>
@else
    <button {{$attributes->merge(['class' => 'transition duration-400 shadow-lg hover:text-white border-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm py-1 px-0.5 text-center mr-2 mb-2 '])}} >
        {{ $slot }}
    </button>
@endif