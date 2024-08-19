<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Katalog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-primary-button>
                        <a href="{{ route('admin.katalog.create') }}">
                        {{ __('Tambah Katalog') }}
                    </a></x-primary-button>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700 mt-6">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">ID</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Nama Wisata</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Deskripsi</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($katalogs as $katalog)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-200 dark:border-gray-700">{{ $katalog->id }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $katalog->nama_wisata }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $katalog->description }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">
                                        <a href="{{ route('admin.katalog.show', $katalog->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                        <a href="{{ route('admin.katalog.edit', $katalog->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('admin.katalog.destroy', $katalog->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">No items found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
