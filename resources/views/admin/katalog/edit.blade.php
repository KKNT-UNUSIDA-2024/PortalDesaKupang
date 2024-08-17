<!-- resources/views/admin/katalog/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Katalog') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-2xl font-semibold mb-4">Edit Katalog Item</h1>

                        <form action="{{ route('admin.katalog.update', $katalog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="nama_wisata" class="block text-sm font-medium text-gray-700">Nama Wisata</label>
                                <input type="text" name="nama_wisata" id="nama_wisata" value="{{ old('nama_wisata', $katalog->nama_wisata) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description', $katalog->description) }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                @if ($katalog->image)
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $katalog->image) }}" alt="Current Image" class="w-32 h-32 object-cover">
                                    </div>
                                @endif
                                <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
