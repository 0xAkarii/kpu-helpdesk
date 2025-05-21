<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>{{ config('app.name') }} {{ __(' - KPU') }}</title>
</head>

<body class="h-full overflow-hidden">
    <div class="relative min-h-screen overflow-hidden">
        <!-- Background Image Section with Darker Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat z-[-1]"
             style="
                background-image: url('{{ asset('img/kpu.jpg') }}');
                filter: brightness(50%);">
        </div>

        <x-navbar></x-navbar>
        <x-header>{{ $title }}</x-header>
        
        <main class="relative z-10">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
</body>

</html>