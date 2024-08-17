<!-- resources/views/admin/katalog/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Katalog Detail') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-2xl font-semibold mb-4">{{ $katalog->nama_wisata }}</h1>
                        <p class="text-lg mb-4">{{ $katalog->description }}</p>
                        @if ($katalog->image)
                            <img src="{{ asset('storage/' . $katalog->image) }}" alt="Image" class="w-64 h-64 object-cover mb-4">
                        @endif
                        <a href="{{ route('admin.katalog.edit', $katalog->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.katalog.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
