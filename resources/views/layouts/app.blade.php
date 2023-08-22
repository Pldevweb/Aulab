<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AULAB</title>
@extends('layouts.base')
</head>
<body>
    @include('layouts.header')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
</body>
</html>
