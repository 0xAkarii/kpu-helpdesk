<x-layout-other>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
            <h2 class="text-2xl font-bold">Articles by : {{ $author->username }}</h2>          
        </div>
    </div>

    <div class="px-5">
        {{ $posts->links() }} <!-- Link pagination -->
    </div>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $delay => $post)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" 
                    data-aos="fade-left" 
                    data-aos-duration="1000" 
                    data-aos-delay="{{ $delay * 500 }}">
                    <!-- Thumbnail -->
                    <a href="{{ route('post', $post->slug) }}">
                        <img src="{{ $post->thumbnail ? asset('images/' . $post->thumbnail) : 'default-thumbnail.jpg' }}" alt="{{ Str::limit($post->title), 30 }}" class="mb-4 w-full h-48 object-cover rounded-lg">
                    </a>
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="{{ route('post', $post->slug) }}" class="hover:underline">{{ $post->title }}</a>
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        {{ Str::limit(strip_tags($post->body), 150, '...') }}
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <span class="text-xs font-medium dark:text-white">
                                {{ __('Published by') }} 
                                <a href="{{ route('author', $post->author->username) }}" class="hover:text-blue-500 hover:underline">
                                    {{ $post->author->username }}
                                </a>
                            </span>
                        </div>
                        <a href="{{ route('post', $post->slug) }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-sm">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>                  
            @endforeach
        </div>  
    </div>
</x-layout-other>
