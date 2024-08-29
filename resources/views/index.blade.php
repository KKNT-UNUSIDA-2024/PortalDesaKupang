<!-- resources/views/index.blade.php -->

<x-portal-layout :title="'Portal'">
    <x-nav-bar></x-nav-bar>

    <!-- HERO
        ================================================== -->
    <main class="fp-wrapper">

        <!-- HERO -->
        <section class="fp-section">
            <div class="section section-top">

                <!-- Video Background -->
                <video autoplay playsinline muted loop style="position: absolute; top: 50%; left: 50%; width: 100%; height: 100%; object-fit: cover; transform: translate(-50%, -50%); z-index: -1;">
                    <source src="{{ asset('video/0819.mp4') }}" type="video/mp4">
                    HTML video is not supported by your browser.
                </video>

                <!-- Overlay -->
                <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

                <!-- Triangles -->
                <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
                <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

                <!-- Content -->
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-8 col-lg-7">

                            <!-- Heading -->
                            <h1 class="text-white text-center mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                                Selamat Datang Di Portal
                            </h1>

                            <!-- Subheading -->
                            <p class="lead text-white text-muted text-center mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                                Pemdes Kupang adalah set halaman yang bertujuan untuk membantu perusahaan mempromosikan produk baru dan peluncuran bisnis.
                            </p>

                            <!-- Button -->
                            <p class="text-center mb-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
                                <a href="{{ route('posts.show', $latestPost->slug) }}" class="btn btn-outline-primary text-white">
                                    {{ $latestPost->title }} - {{ $latestPost->created_at->format('d F Y') }}
                                </a>
                            </p>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .container -->

            </div>
        </section>

    </main>

</x-portal-layout>
