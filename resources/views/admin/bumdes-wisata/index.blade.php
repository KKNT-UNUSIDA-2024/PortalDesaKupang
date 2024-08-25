<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Bumdes dan Wisata') }}
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
                        <a href="{{ route('admin.bumdes-wisata.create') }}">
                        {{ __('Tambah Bumdes dan Wisata') }}
                    </a></x-primary-button>
                    <x-primary-button>
                        <a href="{{ route('admin.bumdes-wisata.download.pdf') }}">
                            {{ __('Download PDF') }}
                        </a>
                    </x-primary-button>
                    <x-primary-button>
                        <a href="{{ route('admin.bumdes-wisata.download.excel') }}">
                            {{ __('Download Excel') }}
                        </a>
                    </x-primary-button>
                    <div class="mt-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
        <tr>
            <th scope="col" class="p-4 border border-gray-200 dark:border-gray-700">
                <div class="flex items-center">
                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-all" class="sr-only">checkbox</label>
                </div>
            </th>
            <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Nama Bumdes dan Wisata</th>
            <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Kategori</th>
            <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Deskripsi</th>
            <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Tanggal Awal</th>
            <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Tanggal Jatuh Tempo</th>
            <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Status</th>
            <th scope="col" class="px-6 py-3 border border-gray-200 dark:border-gray-700">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bumdesWisata as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <input id="checkbox-{{ $item->id }}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-{{ $item->id }}" class="sr-only">checkbox</label>
                    </div>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-200 dark:border-gray-700">{{ $item->nama_bumdes_wisata }}</td>
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->kategori }}</td>
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->description }}</td>
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->tanggal_awal_peminjaman }}</td>
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $item->jatuh_tempo_peminjaman }}</td>
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">
                    @if ($item->status === 'aktif')
                        <span class="text-green-600 dark:text-green-400">Aktif</span>
                    @else
                        <span class="text-red-600 dark:text-red-400">Tidak Aktif</span>
                    @endif
                </td>
                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">
                    <a href="{{ route('admin.bumdes-wisata.edit', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.bumdes-wisata.destroy', $item->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-action="delete" data-item='{"id": {{ $item->id }}, "nama_bumdes_wisata": "{{ $item->nama_bumdes_wisata }}"}'>Delete</button>
                    </form>
                    <a href="{{ route('admin.bumdes-wisata.show', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
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

<!-- Modal Template -->
<div id="actionModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 flex items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <form id="modalForm" class="relative bg-white rounded-lg shadow dark:bg-gray-700" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Ensure to use PUT for updates -->
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 id="modalTitle" class="text-xl font-semibold text-gray-900 dark:text-white">
                    Modal Title
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="actionModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div id="modalBody" class="p-6 space-y-6">
                <!-- Content will be injected here -->
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                <button id="modalSaveButton" type="submit" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                <button id="modalDeleteButton" type="button" class="hidden text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="actionModal">Cancel</button>
            </div>
        </form>
    </div>
</div>








<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('actionModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalBody = document.getElementById('modalBody');
        const modalSaveButton = document.getElementById('modalSaveButton');
        const modalDeleteButton = document.getElementById('modalDeleteButton');
        const modalForm = document.getElementById('modalForm');

        function showModal(type, item) {
            if (type === 'edit') {
                modalTitle.textContent = 'Edit Bumdes dan Wisata';
                modalSaveButton.classList.remove('hidden');
                modalDeleteButton.classList.add('hidden');
                modalBody.innerHTML = `
                    <!-- Edit form content here -->
                    <div class="grid grid-cols-6 gap-6">
                        <!-- Example input fields -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="nama-bumdes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Bumdes dan Wisata</label>
                            <input type="text" id="nama-bumdes" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="${item.nama_bumdes_wisata}">
                        </div>
                        <!-- Add other fields as needed -->
                    </div>
                `;
                modalSaveButton.onclick = () => {
                    modalForm.submit();
                };
            } else if (type === 'delete') {
                modalTitle.textContent = 'Delete Bumdes dan Wisata';
                modalSaveButton.classList.add('hidden');
                modalDeleteButton.classList.remove('hidden');
                modalBody.innerHTML = `
                    <p>Are you sure you want to delete ${item.nama_bumdes_wisata}?</p>
                `;
                modalDeleteButton.onclick = () => {
                    document.getElementById(`delete-form-${item.id}`).submit();
                };
            } else if (type === 'details') {
                modalTitle.textContent = 'Detail Bumdes dan Wisata';
                modalSaveButton.classList.add('hidden');
                modalDeleteButton.classList.add('hidden');
                modalBody.innerHTML = `
                    <!-- Detail content here with disabled inputs -->
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="nama-bumdes-detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Bumdes dan Wisata</label>
                            <input type="text" id="nama-bumdes-detail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" value="${item.nama_bumdes_wisata}" disabled>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="kategori-detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <input type="text" id="kategori-detail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" value="${item.kategori}" disabled>
                        </div>
                        <div class="col-span-6">
                            <label for="description-detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea id="description-detail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" rows="4" disabled>${item.description}</textarea>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="tanggal-awal-detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Awal Peminjaman</label>
                            <input type="text" id="tanggal-awal-detail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" value="${item.tanggal_awal_peminjaman}" disabled>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="jatuh-tempo-detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Jatuh Tempo</label>
                            <input type="text" id="jatuh-tempo-detail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" value="${item.jatuh_tempo_peminjaman}" disabled>
                        </div>
                        <div class="col-span-6">
                            <label for="status-detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <input type="text" id="status-detail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" value="${item.status}" disabled>
                        </div>
                    </div>
                `;
            }
            modal.classList.remove('hidden');
        }

        function closeModal() {
            modal.classList.add('hidden');
        }

        document.querySelectorAll('[data-action="edit"]').forEach(button => {
            button.addEventListener('click', () => {
                const item = JSON.parse(button.getAttribute('data-item'));
                showModal('edit', item);
            });
        });

        document.querySelectorAll('[data-action="delete"]').forEach(button => {
            button.addEventListener('click', () => {
                const item = JSON.parse(button.getAttribute('data-item'));
                showModal('delete', item);
            });
        });

        document.querySelectorAll('[data-action="details"]').forEach(button => {
            button.addEventListener('click', () => {
                const item = JSON.parse(button.getAttribute('data-item'));
                showModal('details', item);
            });
        });

        document.querySelectorAll('[data-modal-hide]').forEach(button => {
            button.addEventListener('click', closeModal);
        });
    });
</script>



