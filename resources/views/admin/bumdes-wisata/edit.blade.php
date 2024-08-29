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

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="nama_bumdes_wisata" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Bumdes & Wisata</label>
                                    <input type="text" id="nama_bumdes_wisata" name="nama_bumdes_wisata" value="{{ old('nama_bumdes_wisata', $bumdesWisata->nama_bumdes_wisata) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                                </div>

                                <div class="mb-4">
                                    <label for="kategori" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                                    <select id="kategori" name="kategori" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                        <option value="" disabled>Pilih kategori</option>
                                        @foreach($kategoris as $kategori)
                                            <option value="{{ $kategori->kategori }}" {{ $kategori->kategori == old('kategori', $bumdesWisata->kategori) ? 'selected' : '' }}>
                                                {{ $kategori->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="text" id="kategori_baru" name="kategori_baru" placeholder="Masukkan kategori baru" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" oninput="updateSelect()">
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                                    <textarea id="description" name="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">{{ old('description', $bumdesWisata->description) }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gambar</label>
                                    <input type="file" id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                    @if ($bumdesWisata->image)
                                        <img src="{{ asset('storage/' . $bumdesWisata->image) }}" alt="Image" class="mt-2 w-32 h-32 object-cover">
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label for="tanggal_awal_peminjaman" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Awal Peminjaman</label>
                                    <input type="date" id="tanggal_awal_peminjaman" name="tanggal_awal_peminjaman" value="{{ old('tanggal_awal_peminjaman', $bumdesWisata->tanggal_awal_peminjaman) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                                </div>

                                <div class="mb-4">
                                    <label for="jatuh_tempo_peminjaman" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jatuh Tempo Peminjaman</label>
                                    <input type="date" id="jatuh_tempo_peminjaman" name="jatuh_tempo_peminjaman" value="{{ old('jatuh_tempo_peminjaman', $bumdesWisata->jatuh_tempo_peminjaman) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                </div>

                                <div class="mb-4">
                                    <label for="biaya_penyewaan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Biaya Penyewaan</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 dark:text-gray-400">Rp</span>
                                        <input type="text" id="biaya_penyewaan" name="biaya_penyewaan" value="{{ old('biaya_penyewaan', number_format($bumdesWisata->biaya_penyewaan, 0, ',', '.')) }}" class="mt-1 block w-full pl-8 border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required oninput="formatRupiah(this)">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="nama_penyewa" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Penyewa</label>
                                    <input type="text" id="nama_penyewa" name="nama_penyewa" value="{{ old('nama_penyewa', $bumdesWisata->nama_penyewa) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
function updateSelect() {
    const select = document.getElementById('kategori');
    const input = document.getElementById('kategori_baru').value;

    // Cek jika input tidak kosong
    if (input) {
        // Tambahkan kategori baru ke select
        let optionExists = false;
        for (let i = 0; i < select.options.length; i++) {
            if (select.options[i].value === input) {
                optionExists = true;
                break;
            }
        }
        if (!optionExists) {
            const newOption = document.createElement('option');
            newOption.value = input;
            newOption.text = input;
            select.add(newOption);
            select.value = input; // Pilih kategori baru
        }
    }
}
</script>

</x-app-layout>
