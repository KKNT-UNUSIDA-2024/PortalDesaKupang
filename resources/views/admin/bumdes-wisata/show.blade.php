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
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Nama Bumdes & Wisata</h3>
                        <p>{{ $bumdesWisata->nama_bumdes_wisata }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Kategori</h3>
                        <p>{{ $bumdesWisata->kategori }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Deskripsi</h3>
                        <p>{{ $bumdesWisata->description }}</p>
                    </div>
                    @if($bumdesWisata->image)
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold">Gambar</h3>
                            <img src="{{ asset('storage/' . $bumdesWisata->image) }}" alt="Image" class="w-64 h-64 object-cover">
                        </div>
                    @endif
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Tanggal Awal Peminjaman</h3>
                        <p>{{ $bumdesWisata->tanggal_awal_peminjaman ? \Carbon\Carbon::parse($bumdesWisata->tanggal_awal_peminjaman)->format('d M Y') : 'N/A' }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Jatuh Tempo Peminjaman</h3>
                        <p>{{ $bumdesWisata->jatuh_tempo_peminjaman ? \Carbon\Carbon::parse($bumdesWisata->jatuh_tempo_peminjaman)->format('d M Y') : 'N/A' }}</p>
                    </div>
                    <a href="{{ route('admin.bumdes-wisata.edit', $bumdesWisata->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.bumdes-wisata.destroy', $bumdesWisata->id) }}" method="POST" class="inline-block ml-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
