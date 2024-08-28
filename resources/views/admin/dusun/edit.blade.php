<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Dusun') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.dusun.update', $dusun->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="nama">Nama Dusun</label>
                            <input type="text" name="nama" value="{{ $dusun->nama }}" required>
                        </div>
                        <div>
                            <label for="jumlah_rt">Jumlah RT</label>
                            <input type="number" name="jumlah_rt" value="{{ $dusun->jumlah_rt }}" required>
                        </div>
                        <div>
                            <label for="jumlah_rw">Jumlah RW</label>
                            <input type="number" name="jumlah_rw" value="{{ $dusun->jumlah_rw }}" required>
                        </div>
                        <div>
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi">{{ $dusun->deskripsi }}</textarea>
                        </div>
                        <div>
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar[]" multiple> <!-- Mengizinkan beberapa gambar -->
                        </div>
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>