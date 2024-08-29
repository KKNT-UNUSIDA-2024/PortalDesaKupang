<!-- resources/views/posts/show.blade.php -->

<x-portal-layout :title="'Berita Desa'">
    <x-nav-bar-light></x-nav-barlight>

    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Heading -->
                    <h5 class="breadcrumb-heading">
                        Berita Desa
                    </h5>
                </div>
                <div class="col-auto">
                    <!-- Breadcrumb -->
                    <span class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </span>
                    <span class="breadcrumb-item active">
                        Berita
                    </span>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </nav>

    <!-- POST -->
    <section>
        <div class="container section pb-0">
            <h1 class="mb-4">Semua Postingan</h1>

            @foreach($posts as $post)
                <div class="row align-items-center text-nounderline">
                    <div class="col-12 col-md-3">
                        <!-- Image -->
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <!-- Meta -->
                        <p class="mb-2 text-xs text-muted">
                            {{ $post->created_at->diffForHumans() }}
                        </p>

                        <!-- Heading -->
                        <h4>
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                        </h4>

                        <!-- Text -->
                        <p class="mb-0 text-sm text-muted">
                            {{ Str::limit($post->content, 150) }}
                        </p>
                    </div>
                </div> <!-- / .row -->
                <hr>
            @endforeach

            <!-- Pagination Links -->
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </section>
</x-portal-layout>
