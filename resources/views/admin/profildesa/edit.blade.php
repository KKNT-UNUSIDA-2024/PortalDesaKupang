<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Profile Desa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.profildesa.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="grid grid-cols-1 gap-6">
                        <div class="mb-4">
                                <label for="logo_desa" class="block text-sm font-medium text-gray-700">Logo Desa</label>
                                <input type="file" name="logo_desa" id="logo_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                                @if($profileDesa->logo_desa)
                                    <img src="{{ asset('storage/' . $profileDesa->logo_desa) }}" alt="Logo Desa" class="mt-2 max-w-xs">
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="nama_desa" class="block text-sm font-medium text-gray-700">Nama Desa</label>
                                <input type="text" name="nama_desa" id="nama_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" required value="{{ old('nama_desa', $profileDesa->nama_desa) }}">
                            </div>
                            <div class="mb-4">
                                <label for="alamat_desa" class="block text-sm font-medium text-gray-700">Alamat Desa</label>
                                <input type="text" name="alamat_desa" id="alamat_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" required value="{{ old('alamat_desa', $profileDesa->alamat_desa) }}">
                            </div>
                            <div class="mb-4">
                                <label for="visi_desa" class="block text-sm font-medium text-gray-700">VISI Desa</label>
                                <textarea name="visi_desa" id="visi_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>{{ old('visi_desa', $profileDesa->visi_desa) }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="misi_desa" class="block text-sm font-medium text-gray-700">MISI Desa</label>
                                <textarea name="misi_desa" id="misi_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>{{ old('misi_desa', $profileDesa->misi_desa) }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="struktur_pemerintahan" class="block text-sm font-medium text-gray-700">Struktur Pemerintahan</label>
                                <input type="file" name="struktur_pemerintahan" id="struktur_pemerintahan" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                                @if($profileDesa->struktur_pemerintahan)
                                    <img src="{{ asset('storage/' . $profileDesa->struktur_pemerintahan) }}" alt="Struktur Pemerintahan" class="mt-2 max-w-xs">
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="struktur_bpd" class="block text-sm font-medium text-gray-700">Struktur BPD</label>
                                <input type="file" name="struktur_bpd" id="struktur_bpd" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                                @if($profileDesa->struktur_bpd)
                                    <img src="{{ asset('storage/' . $profileDesa->struktur_bpd) }}" alt="Struktur BPD" class="mt-2 max-w-xs">
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="sejarah_desa" class="block text-sm font-medium text-gray-700">Sejarah Desa</label>
                                <textarea name="sejarah_desa" id="sejarah_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>{{ old('sejarah_desa', $profileDesa->sejarah_desa) }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="gambar_sejarah_desa" class="block text-sm font-medium text-gray-700">Gambar Sejarah Desa</label>
                                <input type="file" name="gambar_sejarah_desa" id="gambar_sejarah_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                                @if($profileDesa->gambar_sejarah_desa)
                                    <img src="{{ asset('storage/' . $profileDesa->gambar_sejarah_desa) }}" alt="Gambar Sejarah Desa" class="mt-2 max-w-xs">
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="peta_lokasi_desa" class="block text-sm font-medium text-gray-700">Peta Lokasi Desa</label>
                                <input type="file" name="peta_lokasi_desa" id="peta_lokasi_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                                @if($profileDesa->peta_lokasi_desa)
                                    <img src="{{ asset('storage/' . $profileDesa->peta_lokasi_desa) }}" alt="Peta Lokasi Desa" class="mt-2 max-w-xs">
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="luas_desa" class="block text-sm font-medium text-gray-700">Luas Desa (ha)</label>
                                <input type="number" name="luas_desa" id="luas_desa" step="0.01" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" required value="{{ old('luas_desa', $profileDesa->luas_desa) }}">
                            </div>
                            <div class="mb-4">
                                <label for="jumlah_penduduk_desa" class="block text-sm font-medium text-gray-700">Jumlah Penduduk Desa</label>
                                <input type="number" name="jumlah_penduduk_desa" id="jumlah_penduduk_desa" class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" required value="{{ old('jumlah_penduduk_desa', $profileDesa->jumlah_penduduk_desa) }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
