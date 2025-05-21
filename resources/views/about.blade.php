<x-layout-other>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="relative px-4 py-10 sm:px-6 lg:px-8 lg:py-20">
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <!-- Bagian Kiri: Gambar -->
            <div class="flex justify-center lg:justify-end">
                <div class="relative overflow-hidden rounded-lg w-full max-w-md lg:max-w-none">
                    <img src="{{ asset('img/kpu.jpg') }}" alt="Deskripsi Gambar" class="transition-transform duration-300 ease-in-out transform hover:scale-105 w-full h-auto" data-aos="fade-right" data-aos-duration="1000">
                </div>
            </div>
            <!-- Bagian Kanan: Teks dan Link Media Sosial -->
            <div class="mt-12 lg:mt-0 lg:pl-12 lg:max-w-lg">
                <h2 class="text-3xl font-bold text-red-800 leading-tight" data-aos="fade-left" data-aos-duration="1000">
                    Tentang Kami
                </h2>
                <p class="mt-4 text-md leading-relaxed text-gray-700" data-aos="fade-left" data-aos-duration="2000">
                    Selamat datang di portal berita resmi KPU Kabupaten Subang. Website ini didedikasikan untuk menyediakan informasi terbaru dan terpercaya seputar pemilu, kebijakan, serta aktivitas KPU. Kami berkomitmen untuk memberikan transparansi dan edukasi kepada masyarakat mengenai proses demokrasi yang berlangsung. Melalui portal ini, kami berharap dapat meningkatkan partisipasi dan kesadaran masyarakat akan pentingnya pemilu dalam membentuk pemerintahan yang adil dan sejahtera. Website ini dibuat oleh tim PKL KPU <span class="text-blue-500 hover:text-blue-800"><a href="https://instagram.com/universitasmandiri/" target="_blank">UM24</a></span> sebagai bagian dari upaya kami untuk terus berinovasi dan meningkatkan layanan informasi kepada publik.
                </p>
                <div class="mt-4">
                    <span class="block text-base font-medium text-gray-500" data-aos="fade-up" data-aos-duration="2000">Ikuti Kami di Media Sosial:</span>
                    <div class="mt-4 flex space-x-4">
                        <a href="https://www.facebook.com/kpu.subang" target="_blank" class="text-blue-600 hover:text-blue-800" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500">
                            <span class="sr-only">Facebook</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook h-7 w-7" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>                           
                        </a>
                        <a href="https://instagram.com/kpusubang/" target="_blank" class="text-blue-400 hover:text-blue-600" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="600">
                            <span class="sr-only">Instagram</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram h-7 w-7" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg>                                                                                                                                   
                        </a>
                        <a href="https://tiktok.com/@kpu_subang" target="_blank" class="text-pink-600 hover:text-pink-800" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="700">
                            <span class="sr-only">Tiktok</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tiktok h-7 w-7" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@KPUKabupatenSubang" target="_blank" class="text-red-600 hover:text-red-800" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="800">
                            <span class="sr-only">YouTube</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-youtube h-7 w-7" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                            </svg>                          
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-white dark:bg-gray-800 antialiased">
        <div class="p-4 py-6 mx-auto max-w-screen-xl md:p-8 lg:p-10">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-2 lg:grid-cols-2 text-center">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Related links</h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://kpu.go.id" target="_blank" class="hover:underline">KPU RI</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://kab-subang.kpu.go.id" target="_blank" class=" hover:underline">KPU Kab. Subang</a>
                        </li>
                        <li class="mb-4">
                            <a href="/about" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="/posts" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://www.facebook.com/kpu.subang" target="_blank" class="hover:underline">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://instagram.com/kpusubang/" target="_blank" class="hover:underline">Instagram</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://www.youtube.com/@KPUKabupatenSubang" target="_blank" class="hover:underline">Youtube</a>
                        </li>
                        <li class="mb-4">
                            <a href="/contact" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
            <div class="text-center">
                <a href="/" class="flex justify-center items-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="h-12 w-12" src="/img/img.png" alt="KPU Helpdesk">
                    KPU Kab. Subang    
                </a>
                <span class="block text-sm text-center text-gray-500 dark:text-gray-400">&copy; 2024 
                    <a href="#" class="hover:underline">
                        KPU Subang
                    </a>
                    . All Rights Reserved.
                </span>
                <span class="block text-sm text-center text-gray-500 dark:text-gray-400">
                    Made with ❤ by <a href="https://github.com/0xAkarii" target="_blank" class="text-blue-500 hover:text-blue-500 hover:underline">rdnzx</a>
                </span>
                <ul class="flex justify-center mt-5 space-x-5">
                    <li>
                        <a href="https://www.facebook.com/kpu.subang" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/kpusubang/" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.75 2A5.76 5.76 0 002 7.75v8.5A5.76 5.76 0 007.75 22h8.5A5.76 5.76 0 0022 16.25v-8.5A5.76 5.76 0 0016.25 2h-8.5zM12 6.5a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 1.75a3.75 3.75 0 100 7.5 3.75 3.75 0 000-7.5zM18.5 5.5a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
                            </svg>
                        </a>
                    </li>                        
                    <li>
                        <a href="https://www.youtube.com/@KPUKabupatenSubang" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a2.946 2.946 0 0 0-2.072-2.076C19.665 3.5 12 3.5 12 3.5s-7.665 0-9.426.61A2.946 2.946 0 0 0 .5 6.186 29.3 29.3 0 0 0 0 12a29.292 29.292 0 0 0 .5 5.814 2.946 2.946 0 0 0 2.074 2.073C4.336 20.5 12 20.5 12 20.5s7.665 0 9.426-.613a2.946 2.946 0 0 0 2.072-2.072A29.3 29.3 0 0 0 24 12a29.292 29.292 0 0 0-.502-5.814zM9.546 15.568v-7.2l6.253 3.6-6.253 3.6z"/>
                            </svg>
                        </a>
                    </li>                                             
                    <li>
                        <a href="https://kab-subang.kpu.go.id" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</x-layout-other>
