<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
    </head>




    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.navigation')  


        <header class="hero-section">


        <div class="hero-content">
            <p class="welcome">WELCOME TO</p>
            <h1>Digital Tattoo Studio <br> From Melbourne</h1>
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper <br> mattis, pulvinar dapibus leo.</p>
            <a href="#" class="btn-cta">MAKE AN APPOINTMENT</a>
        </div>
    </header>

        {{ $slot }}
    </body>
</html>
