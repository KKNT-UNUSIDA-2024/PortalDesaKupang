<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Bumdes & Wisata') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 py-6">
                        <h1 class="text-2xl font-bold mb-4">Detail Bumdes & Wisata</h1>
                        <form>
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="nama_bumdes_wisata" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Bumdes & Wisata</label>
                                    <input type="text" id="nama_bumdes_wisata" name="nama_bumdes_wisata" value="{{ $bumdesWisata->nama_bumdes_wisata }}" disabled class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                </div>

                                <div class="mb-4">
                                    <label for="kategori" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                                    <input type="text" id="kategori" name="kategori" value="{{ $bumdesWisata->kategori }}" disabled class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                                    <textarea id="description" name="description" disabled class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">{{ $bumdesWisata->description }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gambar</label>
                                    @if($bumdesWisata->image)
                                        <img src="{{ asset('storage/' . $bumdesWisata->image) }}" alt="Image" class="w-64 h-64 object-cover">
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label for="tanggal_awal_peminjaman" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Awal Peminjaman</label>
                                    <input type="text" id="tanggal_awal_peminjaman" name="tanggal_awal_peminjaman" value="{{ $bumdesWisata->tanggal_awal_peminjaman ? \Carbon\Carbon::parse($bumdesWisata->tanggal_awal_peminjaman)->format('d M Y') : 'N/A' }}" disabled class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                </div>

                                <div class="mb-4">
                                    <label for="jatuh_tempo_peminjaman" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jatuh Tempo Peminjaman</label>
                                    <input type="text" id="jatuh_tempo_peminjaman" name="jatuh_tempo_peminjaman" value="{{ $bumdesWisata->jatuh_tempo_peminjaman ? \Carbon\Carbon::parse($bumdesWisata->jatuh_tempo_peminjaman)->format('d M Y') : 'N/A' }}" disabled class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                </div>
                            </div>

                            <div class="mb-4">
                                <a href="{{ route('admin.bumdes-wisata.edit', $bumdesWisata->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.bumdes-wisata.destroy', $bumdesWisata->id) }}" method="POST" class="inline-block ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
