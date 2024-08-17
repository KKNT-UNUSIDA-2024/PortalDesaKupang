<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Bumdes dan Wisata') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Edit Bumdes & Wisata</h1>
    <form action="{{ route('admin.bumdes-wisata.update', $bumdesWisata->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="nama_bumdes_wisata" class="block text-sm font-medium text-gray-700">Nama Bumdes & Wisata</label>
            <input type="text" id="nama_bumdes_wisata" name="nama_bumdes_wisata" value="{{ old('nama_bumdes_wisata', $bumdesWisata->nama_bumdes_wisata) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
            <input type="text" id="kategori" name="kategori" value="{{ old('kategori', $bumdesWisata->kategori) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea id="description" name="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">{{ old('description', $bumdesWisata->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            @if ($bumdesWisata->image)
                <img src="{{ asset('storage/' . $bumdesWisata->image) }}" alt="Image" class="mt-2 w-32 h-32 object-cover">
            @endif
        </div>

        <div class="mb-4">
            <label for="tanggal_awal_peminjaman" class="block text-sm font-medium text-gray-700">Tanggal Awal Peminjaman</label>
            <input type="date" id="tanggal_awal_peminjaman" name="tanggal_awal_peminjaman" value="{{ old('tanggal_awal_peminjaman', $bumdesWisata->tanggal_awal_peminjaman) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="jatuh_tempo_peminjaman" class="block text-sm font-medium text-gray-700">Jatuh Tempo Peminjaman</label>
            <input type="date" id="jatuh_tempo_peminjaman" name="jatuh_tempo_peminjaman" value="{{ old('jatuh_tempo_peminjaman', $bumdesWisata->jatuh_tempo_peminjaman) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
