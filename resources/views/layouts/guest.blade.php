<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Adapt Tech test') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-inter antialiased text-white">
        <div class="text-black/50 bg-adapt-bg dark:text-white/50">
            <div class="relative min-h-screen flex flex-col justify-top">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl mx-auto">
                    <header class="flex items-center justify-between py-10 w-full">
                        <div class="flex-shrink-0">
                            <x-adapt-logo class="block h-8 fill-white w-auto" />
                        </div>

                        {{-- Navigation on the right for login/register items --}}
                        @if (Route::has('login'))
                            <nav class="flex gap-3">
                                @auth
                                <a href="{{ url('/dashboard') }}"
                                   class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Register
                                </a>
                            @endif
                            @endauth
                            </nav>
                        @endif
                    </header>
                </div>

                <div class="flex flex-col items-center pt-10 sm:pt-0">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
