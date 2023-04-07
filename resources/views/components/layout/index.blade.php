<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}?v=1.3.2" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}?v=1.3.2" defer></script>
    <link rel="stylesheet" href="/favicon.ico">
    @livewireStyles
</head>

<body class="font-sans text-gray-700 bg-slate-300 black flex flex-col min-h-screen">
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
