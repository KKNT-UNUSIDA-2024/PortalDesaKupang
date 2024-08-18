<!-- resources/views/index.blade.php -->

@extends('layouts.portal')

@section('content')
    <div class="relative overflow-hidden bg-gray-900">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="relative z-10 flex items-center justify-center min-h-screen text-center text-white">
            <div>
                <h1 class="text-5xl font-bold mb-4">Selamat Datang di Portal Desa</h1>
                <p class="text-lg mb-8">Jelajahi informasi terbaru dan katalog wisata kami.</p>
            </div>
        </div>
    </div>
@endsection
