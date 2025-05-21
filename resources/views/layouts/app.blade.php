<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/sb-admin-2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/vendor/fontawesome-free/css/all.min.css') }}">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="{{ asset('bootstrap/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <!-- AOS CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

        <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.tiny.cloud/1/2pwuyy5pf7kew3fjwk1a0m2h0snfz7bcs6uo6oq0m3a8fl0e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#body',
                height: 300,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | bold italic backcolor | \
                        alignleft aligncenter alignright alignjustify | \
                        bullist numlist outdent indent | removeformat | help'
            });
        </script>
        <style>
            /* Ensure cards are square */
            .card {
                aspect-ratio: 1 / 1;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="{{ asset('bootstrap/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('bootstrap/js/sb-admin-2.min.js') }}"></script>
        <script src="{{ asset('bootstrap/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('bootstrap/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('bootstrap/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/demo/datatables-demo.js') }}"></script>
        <script src="{{ asset('bootstrap/js/script.js') }}"></script>
        <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js') }}"></script>
        <!-- AOS JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
        AOS.init();
        </script>

    </body>
</html>
