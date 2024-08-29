<!-- resources/views/posts/show.blade.php -->

<x-portal-layout :title="$post->title">
    <x-nav-bar-light></x-nav-barlight>

    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Heading -->
                    <h5 class="breadcrumb-heading">
                        Blog post
                    </h5>
                </div>
                <div class="col-auto">
                    <!-- Breadcrumb -->
                    <span class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </span>
                    <span class="breadcrumb-item active">
                        Blog post
                    </span>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </nav>

    <!-- POST -->
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Meta -->
                    <div class="row align-items-center justify-content-center no-gutters mb-4">
                        <div class="col-auto">
                            <div class="avatar mr-3">
                                <img src="{{ asset('assets/img/17.jpg') }}" alt="..." class="img-cover rounded-circle">
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0 text-xs text-muted">
                                by <strong class="text-body">{{ $post->author_name }}</strong> {{ $post->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div> <!-- / .row -->

                    <!-- Heading -->
                    <h1 class="mb-5 font-weight-bold text-center">
                        {{ $post->title }}
                    </h1>
                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12">
                    <!-- Image -->
                    @if($post->image)
                        <img src="{{ asset('assets/img/' . $post->image) }}" alt="..." class="img-fluid mb-3">
                    @endif

                    <!-- Caption -->
                    <p class="text-center text-sm text-muted mb-5">
                        {{ $post->caption }}
                    </p>
                </div>
            </div> <!-- / .row -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Content -->
                    <blockquote class="blockquote">
                        <p>
                            {{ $post->blockquote }}
                        </p>
                    </blockquote>

                    <p>
                        {!! $post->content !!}
                    </p>

                    <p class="mb-0">
                        {{ $post->additional_content }}
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
</x-portal-layout>
