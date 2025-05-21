<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>
<div class="container-fluid mt-5">
    <h1 class="text-start font-semibold fs-6 text-gray-800 dark:text-gray-200 leading-tight">
        <a href="{{ route('dashboard.posts.index') }}" class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-3 py-1 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition">
            &laquo;{{ __('Back') }}
        </a>
    </h1>
    <h1 class="text-center font-semibold fs-2 text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Create Post') }}
    </h1>
        @include('main.form-post')
</div>
</x-app-layout>
