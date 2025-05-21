<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}, {{ __('Welcome') }} {{ Auth::user()->name }}!
        </h2>
    </x-slot>
<div class="container mt-5">
        @include('main.view')
</div>
</x-app-layout>
