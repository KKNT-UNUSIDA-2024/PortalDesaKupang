<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 py-6">


        <meta name="csrf-token" content="{{ csrf_token() }}">
@csrf
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" id="title" name="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"  required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                <textarea id="content" name="content"></textarea>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Submit</button>
        </form>
    </div>

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

<script>
    tinymce.init({
        license_key: 'gpl',
        selector: 'textarea#content',
        width: '100%', // Lebar 100% dari kontainer
        height: 2000, // Tinggi tetap
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ],
        image_title: true,
        automatic_uploads: true,
        images_upload_url: '{{ route('admin.posts.upload') }}',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });
</script>
</x-app-layout>


