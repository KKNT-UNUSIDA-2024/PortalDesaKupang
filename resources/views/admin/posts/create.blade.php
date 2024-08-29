<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Post') }}
        </h2>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </x-slot>
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

<script>
    tinymce.init({
        selector: 'textarea#content',
        height: 500,
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


{{--
    <script>
        tinymce.init({
            selector: 'textarea#content',
            plugins: 'advlist autolink lists link image charmap preview anchor',
            toolbar_mode: 'floating',
            height: 300,
            images_upload_url: '{{ route('admin.posts.upload') }}',
            images_upload_credentials: true, // Set to true if you need to send credentials
            setup: function (editor) {
                editor.on('init', function () {
                    editor.getDoc().addEventListener('paste', function (event) {
                        event.preventDefault();
                        var items = event.clipboardData.items;
                        for (var i = 0; i < items.length; i++) {
                            if (items[i].type.indexOf('image') === 0) {
                                var file = items[i].getAsFile();
                                var formData = new FormData();
                                formData.append('file', file);
                                formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                                fetch('{{ route('admin.posts.upload') }}', {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                    }
                                }).then(response => response.json()).then(data => {
                                    editor.insertContent('<img src="' + data.location + '"/>');
                                }).catch(error => {
                                    console.error('Error:', error);
                                });
                            }
                        }
                    });
                });
            }
        });
    </script> --}}
</x-app-layout>


