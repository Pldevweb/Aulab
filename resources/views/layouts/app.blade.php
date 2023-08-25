<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="storage/css/styles.css">
    <title>AULAB</title>
@extends('layouts.base')
</head>
<body>
    <header>
        <x-header />
    </header>
    <main class="min-h-screen">
        @yield('content')
    </main>
    @isset($slot)
        {{ $slot }}
    @endisset
    <footer class="relative bottom-0">
        <x-footer />
    </footer>
</body>
</html>
