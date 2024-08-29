<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
    <div class="container">
    <h1>Edit Post</h1>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" rows="10" class="form-control" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!-- TinyMCE Initialization -->
<script>
    tinymce.init({
        selector: 'textarea#content',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        height: 300,
        images_upload_url: '{{ route('admin.posts.upload') }}',
        images_upload_credentials: true
    });
</script>
</x-app-layout>

