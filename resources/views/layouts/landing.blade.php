<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AmakeTraveLite') }} | Your gateway to unforgetable adventures</title>
    <meta name="description"
        content="Discover unforgettable experiences with AmakeTraveLite – from expert-led hikes and nature walks to immersive cultural tours across Kenya’s hidden gems. Start your adventure today.">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content') 
</body>

</html>
