<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600|space-grotesk:300,400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            :root {
                --clr-bg: rgba(21, 21, 21, 1);
                --clr-txt: rgba(238, 238, 238, 1);
                --clr-sec: rgba(196, 29, 58, 1);
                --clr-acc: rgba(199, 54, 89, 1);
            }

            body {
                background-color: var(--clr-bg);
                color: var(--clr-txt);
                font-size: 40px;
                cursor: url('/img/cursor/cursor_rocket.png'), auto;
            }
        </style>

    </head>
    <body>
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg" style="background-color:var(--clr-sec); color:var(--clr-txt);">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
