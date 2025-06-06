@props([
    'title' => 'Laravel',
    'description' => 'Laravel',
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >

        <title>Laravel</title>

        <!-- Fonts -->
        <link
            rel="preconnect"
            href="https://fonts.bunny.net"
        >
        <link
            href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
        @livewireStyles
        @fluxAppearance
        @stack('styles')
    </head>

    <body class="">
        {{ $slot }}

        @livewireScripts
        @fluxScripts
        @stack('scripts')
    </body>

</html>
