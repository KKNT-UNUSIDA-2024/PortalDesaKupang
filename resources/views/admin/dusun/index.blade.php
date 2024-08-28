<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manajemen Dusun') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('admin.dusun.create') }}" class="btn btn-primary mb-4">Tambah Dusun</a>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th>Nama Dusun</th>
                                <th>Jumlah RT</th>
                                <th>Jumlah RW</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dusuns as $dusun)
                                <tr>
                                    <td>{{ $dusun->nama }}</td>
                                    <td>{{ $dusun->jumlah_rt }}</td>
                                    <td>{{ $dusun->jumlah_rw }}</td>
                                    <td>{{ $dusun->deskripsi }}</td>
                                    <td>
                                        @if($dusun->gambar)
                                            @foreach(json_decode($dusun->gambar) as $image)
                                                <img src="{{ asset('storage/' . $image) }}" alt="Gambar Dusun" style="width: 100px; height: auto;">
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.dusun.edit', $dusun->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.dusun.destroy', $dusun->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
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