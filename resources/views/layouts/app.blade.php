<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
