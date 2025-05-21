<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="isolate px-6 lg:px-8">
        <div class="mx-auto max-w-7xl pt-35 md:pt-44 xxl:pt-35 xxxl:pt-48">
            <!-- Banner Info -->
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-4 py-2 text-sm leading-6 text-gray-300 bg-gray-800 ring-1 ring-gray-900/10 hover:ring-gray-900/20 transform transition-transform duration-300 ease-in-out hover:scale-105" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                    Temukan berita terbaru seputar pemilu dan demokrasi.
                    <a href="/posts" class="font-semibold text-indigo-400">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        Baca lebih lanjut <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <!-- Main Content -->
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl md:text-5xl lg:text-6xl drop-shadow-lg" data-aos="fade-down" data-aos-duration="1000">
                    {{ __('Selamat datang di portal berita KPU Subang!') }}
                </h1>
                <p class="mt-4 text-base leading-7 text-gray-300 sm:text-lg md:text-xl lg:text-2xl drop-shadow-md" data-aos="fade-up" data-aos-duration="1000">
                    Dapatkan informasi terkini tentang pemilu, kebijakan terbaru, dan aktivitas KPU Kabupaten Subang. Bersama kita ciptakan demokrasi yang lebih baik!
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-x-6 gap-y-4">
                    <a href="/posts" class="rounded-md bg-red-800 px-4 py-2 text-sm font-semibold text-gray-100 shadow-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600" data-aos="fade-right" data-aos-duration="1000">
                        Mulai baca
                    </a>
                    <a href="/about" class="text-sm font-semibold leading-6 text-gray-100" data-aos="fade-left" data-aos-duration="1000">
                        Pelajari lebih lanjut <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
