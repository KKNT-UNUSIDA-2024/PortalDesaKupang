<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portal Desa') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')    
</head>
<body class="font-sans antialiased dark:bg-gray-900">
    <!-- Navbar -->
    {{-- <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false" onclick="toggleMobileMenu()">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0">
                        <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-900 dark:text-white">Portal Desa</a>
                    </div>
                    <div class="sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="{{ route('katalog.index') }}" class="text-gray-900 dark:text-white hover:text-gray-600 dark:hover:text-gray-300">Katalog</a>
                            <a href="{{ route('bumdes.public.index') }}" class="text-gray-900 dark:text-white hover:text-gray-600 dark:hover:text-gray-300">Bumdes</a>
                            <a href="{{ route('profile.public.index') }}" class="text-gray-900 dark:text-white hover:text-gray-600 dark:hover:text-gray-300">Profile Desa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:hidden" id="mobile-menu" class="hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('katalog.index') }}" class="text-gray-900 dark:text-white block px-3 py-2 rounded-md text-base font-medium">Katalog</a>
                <a href="{{ route('bumdes.public.index') }}" class="text-gray-900 dark:text-white block px-3 py-2 rounded-md text-base font-medium">Bumdes</a>
                <a href="{{ route('profile.public.index') }}" class="text-gray-900 dark:text-white block px-3 py-2 rounded-md text-base font-medium">Profile Desa</a>
            </div>
        </div>
    </nav> --}}
    <x-nav-bar></x-nav-bar>
<br>
    <main>
        @yield('content')
    </main>

    <!-- Footer (Optional) -->
    <footer class="bg-white dark:bg-gray-800 text-center py-4 mt-6">
        <p class="text-gray-600 dark:text-gray-400">&copy; {{ date('Y') }} Portal Desa. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
    @stack('scripts')
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
