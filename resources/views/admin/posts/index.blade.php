<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
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
    <a href="{{ route('admin.posts.create') }}">
    {{ __('Tambah Bumdes dan Wisata') }}
</a></x-primary-button>
<div class="mt-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
<tr>
    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Judul</th>
    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Dibuat</th> <!-- Tambahkan kolom untuk tanggal -->
    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Diperbarui</th> <!-- Kolom untuk tanggal diperbarui -->
    <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $post->title }}</td>
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $post->created_at->format('d-m-Y H:i') }}</td> <!-- Tampilkan tanggal dibuat -->
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $post->updated_at->format('d-m-Y H:i') }}</td> <!-- Tampilkan tanggal diperbarui -->
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-200 dark:border-gray-700">
                    <x-primary-button><a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">{{ __('Ubah') }}</a></a></x-primary-button>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
                </div>
</x-app-layout>
