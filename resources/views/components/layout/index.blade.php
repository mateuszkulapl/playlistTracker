<!DOCTYPE html>
<html class="scroll-smooth " lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}?v=1.5.6" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}?v=1.5.6" defer></script>
    <link href="/favicon.ico" rel="stylesheet">
    @livewireStyles
</head>

<body class="font-sans text-gray-700 bg-slate-300 black flex flex-col min-h-screen">
    <x-layout.header />
    <x-layout.main>
        {{ $slot }}
        <button class="hidden fixed z-90 bottom-8 right-8 border-1 w-12 h-12 rounded-full drop-shadow-md text-3xl font-black" id="scrollTop" title="Wróć na górę strony" onclick="goToTop()">&uarr;</button>
    </x-layout.main>
    <x-layout.footer class="">
        <p>&copy; {{ config('app.name') }}</p>
    </x-layout.footer>
    @livewireScripts
</body>

</html>
