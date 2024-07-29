<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Preconnect to Google Fonts for performance optimization -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <!-- Importing 'Inter' font family from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Link CSS and JavaScript files managed by Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-inter antialiased bg-slate-100" x-data="{ showingMenu: false }">

   <!-- Responsive sidebar for desktop, hidden on smaller screens -->
    <div class="lg:flex-col lg:w-72 lg:flex lg:z-50 lg:top-0 lg:bottom-0 lg:fixed bg-adapt-bg hidden">
        <div class="inner-nav-bg pb-4 pl-6 pr-6 overflow-x-auto gap-x-5 flex-col grow flex">
            <div class="h-16 flex mt-6">
                <!-- Site logo component -->
                <a href="{{ route('home') }}">
                    <x-adapt-logo class="block h-8 fill-gray-900 dark:fill-white w-auto" />
                </a>
            </div>

            <!-- Include the main menu layout -->
            @include('layouts.menu')
        </div>
    </div>

    <!-- Mobile menu with slide-in animation, hidden on larger screens -->
    <div x-show="showingMenu"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0 -translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-300 transform"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 -translate-x-full"
         class="lg:hidden fixed top-0 left-0 w-4/5 z-50 h-full bg-adapt-bg flex">
        <div class="inner-nav-bg pb-4 pl-6 pr-6 overflow-x-auto gap-x-5 flex-col grow flex z-50">
            <div class="h-16 flex mt-6">
                 <x-adapt-logo class="block h-8 fill-gray-900 dark:fill-white w-auto" />
            </div>
            @include('layouts.menu')
        </div>
         <!-- Button to close the mobile menu -->
        <button @click="showingMenu = false" class="p-[0.625rem] m-[-0.625rem] bg-black/[0.6] rounded-full opacity-100 z-50 absolute top-5 right-5">
            <span class="absolute w-[1px] h-[1px] p-0 m-[-1px] hidden overflow-hidden search-header-clip whitespace-nowrap border-0">Close sidebar</span>
            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Main content area, offset to the right on large screens to make space for the sidebar -->
    <div class="lg:pl-72">

        <!-- Top navigation bar for user profile related actions -->
        <x-top-nav :user="Auth::user()->name" />

        <!-- Page header if a header variable is set -->
            @if (isset($header))
                <header class="bg-white">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

        <!-- Main content slot where page-specific content will be injected -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
