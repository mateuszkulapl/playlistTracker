<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}?v=1.2.0" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}?v=1.2.0" defer></script>
    @livewireStyles
</head>

<body class="font-sans text-gray-700 bg-slate-300 black flex flex-col h-screen">
        <x-layout.header />
    <x-layout.main>
        {{ $slot }}
    </x-layout.main>
    <x-layout.footer class="">
        <p>&copy; {{ config('app.name') }}</p>
    </x-layout.footer>
    @livewireScripts
</body>
</html>
