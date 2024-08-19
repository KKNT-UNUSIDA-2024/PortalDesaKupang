<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Bumdes dan Wisata') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-primary-button>
                        <a href="{{ route('admin.bumdes-wisata.create') }}">
                        {{ __('Tambah Bumdes dan Wisata') }}
                    </a></x-primary-button>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
                            <tr>
                                <th scope="col" class="p-4 border border-gray-200 dark:border-gray-700">
                                    <div class="flex items-center">
                                        <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Nama Bumdes dan Wisata</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Kategori</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Deskripsi</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Tanggal Awal</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Tanggal Jatuh Tempo</th>
                                <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bumdesWisata as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="w-4 p-4 border border-gray-200 dark:border-gray-700">
                                        <div class="flex items-center">
                                            <input id="checkbox-{{ $item->id }}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-{{ $item->id }}" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-200 dark:border-gray-700">{{ $item->nama_bumdes_wisata }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->kategori }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->description }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->tanggal_awal_peminjaman }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->jatuh_tempo_peminjaman }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">
                                        <a href="{{ route('admin.bumdes-wisata.edit', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('admin.bumdes-wisata.destroy', $item->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                        </form>
                                        <a href="{{ route('admin.bumdes-wisata.show', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
