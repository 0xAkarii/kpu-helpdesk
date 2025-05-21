<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <title>{{ config('app.name') }} {{ __(' - KPU') }}</title>
</head>

<body class="h-full">
    <div class="relative min-h-full">
        <x-navbar></x-navbar>
        <x-header>{{ $title }}</x-header>
                {{ $slot }}
    </div>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });

    function setMailto() {
        var email = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;

        var mailtoLink = 'mailto:mail@example.com'
                        + '?subject=' + encodeURIComponent(subject)
                        + '&body=' + encodeURIComponent(message);

        window.location.href = mailtoLink;
    }

    </script>
</body>

</html>
