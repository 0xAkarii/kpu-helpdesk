<nav class="bg-red-800" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/"><img class="h-8 w-8" src="/img/img.png" alt="KPU Helpdesk"></a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex md:ml-10 px-5">
                    <div class="flex items-baseline space-x-10"> 
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                        <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    </div>
                </div>                
            </div>
            <!-- Desktop Profile/Login -->
            <div class="hidden md:flex md:ml-4">
                @auth
                    <div class="relative inline-flex items-center">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')">{{ __('Dashboard') }}</x-dropdown-link>
                                <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-transparent rounded-md shadow-sm hover:bg-gray-100">
                        {{ __('Login') }}
                    </a>
                @endauth
            </div>
            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 bg-red-800">
            <x-responsive-nav-link class="text-black block py-2 px-4" href="/" :active="request()->is('/')">
                Home
            </x-responsive-nav-link>
            <x-responsive-nav-link class="text-black block py-2 px-4" href="/about" :active="request()->is('about')">
                About
            </x-responsive-nav-link>
            <x-responsive-nav-link class="text-black block py-2 px-4" href="/posts" :active="request()->is('posts')">
                Blog
            </x-responsive-nav-link>
            <x-responsive-nav-link class="text-black block py-2 px-4" href="/contact" :active="request()->is('contact')">
                Contact
            </x-responsive-nav-link>
            @auth
                <x-responsive-nav-link class="text-black block py-2 px-4" :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}" class="px-2">
                    @csrf
                    <x-responsive-nav-link class="text-black block py-2 px-4" :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            @else
                <x-responsive-nav-link class="text-black block py-2 px-4" href="{{ route('login') }}">
                    {{ __('Login') }}
                </x-responsive-nav-link>
            @endauth
        </div>
    </div>
</nav>
