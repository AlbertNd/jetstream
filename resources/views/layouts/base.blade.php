<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head />
    <style>
        .gradient {
            background: linear-gradient(90deg, #e2e8f0 0%, #0d9488 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white ">

    {{-- Barre de navigation principale --}}
    <x-partials.navigation.nav />

    {{--Le contenu des pages--}}


    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <footer>
        <x-partials.footer />
    </footer>

    @livewireScripts
</body>

</html>