<header class="bg-white bg-opacity-75 shadow-lg relative z-5">
    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">{{ $slot }}</h1>
    </div>
    <!-- Gradient to smooth the transition from header to background -->
    <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
</header>
