<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Katalog') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
 
        
        <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold mb-4">Katalog List</h1>
        <a href="{{ route('admin.katalog.create') }}" class="btn btn-primary">Add New Item</a>
        
        <div class="mt-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Wisata</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($katalogs as $katalog)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $katalog->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $katalog->nama_wisata }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $katalog->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('admin.katalog.show', $katalog->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                <a href="{{ route('admin.katalog.edit', $katalog->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                
                                <form action="{{ route('admin.katalog.destroy', $katalog->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">No items found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


    </div>
    </div>
    </div>
    </div>

</x-app-layout>
