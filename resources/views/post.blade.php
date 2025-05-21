<x-layout-other>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="text-sm text-blue-500 hover:text-blue-500 hover:underline">
                        &laquo; Back to all posts
                    </a>
                    @if ($post->thumbnail)
                        <img src="{{ asset('images/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="my-6 w-full max-h-90 object-cover mb-6 rounded-lg">
                    @endif
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <div>
                                <p class="text-md font-bold text-gray-900 dark:text-white">Published by<a href="{{ route('author', $post->author->username) }}" rel="author" class="text-md font-bold text-gray-900 dark:text-white hover:text-blue-500 hover:underline">
                                    {{ $post->author->name }}
                                </a>
                                </p> 
                                <p class="text-base text-md text-gray-500 dark:text-gray-400">
                                    {{ $post->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
                </header>
                <p>
                    {!! $post->body !!}
                </p>
            </article>
        </div>
    </main>    
    <aside aria-label="Related posts" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="text-center lg:text-left mb-8 text-2xl font-bold text-gray-900 dark:text-white">
                Latest posts
            </h2>
            <div class="grid gap-12 sm:ls-1 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($latestPosts as $latestPost)
                    <article class="max-w-xs mx-auto">
                        <a href="{{ route('post', $latestPost->slug) }}">
                            <img src="{{ $latestPost->thumbnail ? asset('images/' . $latestPost->thumbnail) : 'default-image-path.jpg' }}" class="mb-5 rounded-lg" alt="{{ $latestPost->title }}">
                        </a>
                        <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="{{ route('post', $latestPost->slug) }}" class="hover:underline">{{ $latestPost->title }}</a>
                        </h2>
                        <p class="mb-4 text-gray-500 dark:text-gray-400">
                            {{ Str::limit(strip_tags($latestPost->body), 70) }}
                        </p>
                        <a href="{{ route('post', $latestPost->slug) }}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                            Read more
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </aside>    
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
                        <a href="https://www.facebook.com/kpu.subang" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/kpusubang/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.75 2A5.76 5.76 0 002 7.75v8.5A5.76 5.76 0 007.75 22h8.5A5.76 5.76 0 0022 16.25v-8.5A5.76 5.76 0 0016.25 2h-8.5zM12 6.5a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 1.75a3.75 3.75 0 100 7.5 3.75 3.75 0 000-7.5zM18.5 5.5a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
                            </svg>
                        </a>
                    </li>                        
                    <li>
                        <a href="https://www.youtube.com/@KPUKabupatenSubang" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a2.946 2.946 0 0 0-2.072-2.076C19.665 3.5 12 3.5 12 3.5s-7.665 0-9.426.61A2.946 2.946 0 0 0 .5 6.186 29.3 29.3 0 0 0 0 12a29.292 29.292 0 0 0 .5 5.814 2.946 2.946 0 0 0 2.074 2.073C4.336 20.5 12 20.5 12 20.5s7.665 0 9.426-.613a2.946 2.946 0 0 0 2.072-2.072A29.3 29.3 0 0 0 24 12a29.292 29.292 0 0 0-.502-5.814zM9.546 15.568v-7.2l6.253 3.6-6.253 3.6z"/>
                            </svg>
                        </a>
                    </li>                                             
                    <li>
                        <a href="https://kab-subang.kpu.go.id" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
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
