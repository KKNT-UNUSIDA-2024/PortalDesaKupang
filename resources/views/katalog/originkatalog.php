<!-- resources/views/katalog/index.blade.php -->

@extends('layouts.portal')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-2xl font-semibold mb-4">Katalog Wisata</h1>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($katalogs as $item)
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_wisata }}" class="w-full h-40 object-cover rounded-lg mb-4">
                                    @endif
                                    <h3 class="text-xl font-semibold">{{ $item->nama_wisata }}</h3>
                                    <p class="text-gray-600 dark:text-gray-400">{{ Str::limit($item->description, 100) }}</p>
                                    <a href="{{ route('katalog.show', $item->id) }}" class="text-indigo-600 hover:text-indigo-900 mt-2 block">Lihat Detail</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
