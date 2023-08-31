<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="storage/css/styles.css">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>AULAB</title>

        @extends('layouts.base')
    </head>

    <body x-data class="bg-[#DBDBD8]">
        <header class="h-auto">
            <x-header></x-header>
        </header>
        <main class="min-h-screen flex items-center justify-center">
            <div class="min-h-screen flex items-center bg-white flex-col w-screen md:w-4/6 min-[3440px]:w-2/5 m-3">
                @yield('content')
            </div>
        </main>
        @isset($slot)
            {{ $slot }}
        @endisset
        <footer class="relative bottom-0">
            <x-footer></x-footer>
        </footer>
    </body>
</html>
