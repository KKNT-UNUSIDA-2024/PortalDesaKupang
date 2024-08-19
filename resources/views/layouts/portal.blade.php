<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $profileDesa->nama_desa ?? 'Portal Desa' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')    
</head>
<body class="font-sans antialiased dark:bg-gray-900">
    <!-- Navbar -->
    {{-- <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <img src="{{ asset('storage/' . ($profileDesa->logo_desa ?? 'default-logo.png')) }}" alt="Logo" class="h-8">
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-900 dark:text-white">{{ $profileDesa->nama_desa ?? 'Portal Desa' }}</a>
                </div>
                <div class="sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="{{ route('katalog.index') }}" class="text-gray-900 dark:text-white hover:text-gray-600 dark:hover:text-gray-300">Katalog</a>
                        <a href="{{ route('bumdes.public.index') }}" class="text-gray-900 dark:text-white hover:text-gray-600 dark:hover:text-gray-300">Bumdes</a>
                        <a href="{{ route('profile-desa.show') }}" class="text-gray-900 dark:text-white hover:text-gray-600 dark:hover:text-gray-300">Profil Desa</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:hidden" id="mobile-menu" class="hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('katalog.index') }}" class="text-gray-900 dark:text-white block px-3 py-2 rounded-md text-base font-medium">Katalog</a>
                <a href="{{ route('bumdes.public.index') }}" class="text-gray-900 dark:text-white block px-3 py-2 rounded-md text-base font-medium">Bumdes</a>
                <a href="{{ route('profile-desa.show') }}" class="text-gray-900 dark:text-white block px-3 py-2 rounded-md text-base font-medium">Profile Desa</a>
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
    @stack('scripts')
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
