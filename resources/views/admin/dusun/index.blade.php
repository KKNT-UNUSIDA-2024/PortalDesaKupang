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
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <x-primary-button>
                        <a href="{{ route('admin.dusun.create') }}">
                            {{ __('Tambah Dusun') }}
                        </a>
                    </x-primary-button>

                    <div class="mt-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Nama Dusun</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Jumlah RT</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Jumlah RW</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Deskripsi</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Gambar</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dusuns as $dusun)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $dusun->nama }}</td>
                                        <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $dusun->jumlah_rt }}</td>
                                        <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $dusun->jumlah_rw }}</td>
                                        <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $dusun->deskripsi }}</td>
                                        <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">
                                            @if($dusun->gambar)
                                                @foreach(json_decode($dusun->gambar) as $image)
                                                    <img src="{{ asset('storage/' . $image) }}" alt="Gambar Dusun" style="width: 100px; height: auto;">
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-200 dark:border-gray-700">
                                            <x-primary-button>
                                                <a href="{{ route('admin.dusun.edit', $dusun->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                                            </x-primary-button>
                                            <form action="{{ route('admin.dusun.destroy', $dusun->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">{{ __('Hapus') }}</button>
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
    </div>
</x-app-layout>
