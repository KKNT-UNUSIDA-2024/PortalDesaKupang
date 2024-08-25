<!-- resources/views/index.blade.php -->

<x-portal-layout :title="'Portal'">
    <x-nav-bar></x-nav-bar>

    <!-- HERO
        ================================================== -->
        <section class="section section-top section-full">

            <!-- Video -->
            <div class="bg-video">
              <video class="bg-video-media" autoplay playsinline muted>
                <source src="{{ asset('video/0819.mp4') }}" type="video/mp4">
                HTML video is not supported by your browser.
              </video>
            </div>

            <!-- Overlay -->
            <div class="bg-overlay"></div>

            <!-- Triangles -->
            <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
            <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

            <!-- Content -->
            <div class="container">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-7">

                  <!-- Preheading -->

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
                    <a href="/" target="_blank" class="btn btn-outline-primary text-white">
                      Lebih Lanjut
                    </a>
                  </p>

                </div>
              </div> <!-- / .row -->
            </div> <!-- / .container -->

          </section>

    </x-portal-layout>
