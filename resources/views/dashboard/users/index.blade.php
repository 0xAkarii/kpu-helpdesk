<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>
<div class="container-fluid mt-5">
        @include('main.list-users')
</div>
</x-app-layout>
