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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full max-w-md px-6 py-4 bg-red-800 dark:bg-gray-800 shadow-md rounded-lg">
            <div class="flex justify-center mb-6">
                <div class="">
                    <a href="/">
                        <x-application-logo class="w-24 h-24 fill-current text-gray-500" />
                    </a>
                </div>
            </div>
            {{ $slot }}
        </div>
    </div>
</body>
</html>
