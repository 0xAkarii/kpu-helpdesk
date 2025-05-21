<!-- Content Row -->
<div class="flex flex-wrap -mx-2">

    <!-- Manage Posts Card -->
    <div class="w-full sm:w-1/2 lg:w-1/4 px-2 mb-4"
        @if(request()->header('User-Agent') && preg_match('/Mobile|Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', request()->header('User-Agent')))
            data-aos="fade-left" data-aos-duration="1000"
        @else
            data-aos="fade-down" data-aos-duration="1000"
        @endif
    >
        <div class="bg-white border-l-4 border-primary shadow-md rounded-lg" style="height: 110px;">
            <div class="p-4 flex items-center">
                <a href="{{ route('dashboard.posts.index') }}" class="flex flex-1">
                    <div class="flex-1">
                        <div class="text-xs font-bold text-primary uppercase mb-1">
                            {{ __('Manage Posts') }}
                        </div>
                        <div class="text-xl font-bold text-gray-800">{{ $postCount }} {{ __('Posts') }}</div>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="fas fa-book text-gray-300 text-2xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Manage Users Card -->
    <div class="w-full sm:w-1/2 lg:w-1/4 px-2 mb-4"
        @if(request()->header('User-Agent') && preg_match('/Mobile|Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', request()->header('User-Agent')))
            data-aos="fade-left" data-aos-duration="2000"
        @else
            data-aos="fade-down" data-aos-duration="2000"
        @endif
    >
        <div class="bg-white border-l-4 border-success shadow-md rounded-lg" style="height: 110px;">
            <div class="p-4 flex items-center">
                <a href="{{ route('dashboard.users.index') }}" class="flex flex-1">
                    <div class="flex-1">
                        <div class="text-xs font-bold text-success uppercase mb-1">
                            {{ __('Manage Users') }}
                        </div>
                        <div class="text-xl font-bold text-gray-800">{{ $userCount }} {{ __('Users') }}</div>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="fas fa-user text-gray-300 text-2xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>