<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="storage/css/styles.css">
    <title>AULAB</title>

    @extends('layouts.base')
</head>

<body x-data>
    <x-header></x-header>
    <main class="min-h-screen">
        @yield('content')
    </main>
    @isset($slot)
        {{ $slot }}
    @endisset
    <x-footer></x-footer>
</body>

</html>
