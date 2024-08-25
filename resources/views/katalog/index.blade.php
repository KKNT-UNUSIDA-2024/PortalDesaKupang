
<x-portal-layout :title="'Katalog'">
    @section('title', 'Halaman Desa')
        <!-- MODALS
    ================================================== -->
    <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video-header" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-video modal-lg" role="document">
          <div class="modal-content">

            <!-- Header -->
            <div class="modal-header">

              <!-- Title -->
              <h4 class="modal-title text-white" id="modal-video-header">
                Video demonstration
              </h4>

              <!-- Close -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">

              <!-- Video -->
              <video src="assets/video/1.mp4" class="img-fluid" controls></video>

            </div>
          </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
      </div> <!-- / .modal -->
    <x-nav-bar-light></x-nav-bar-light>



<!-- NAV
================================================== -->
<div class="mt-navbar border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-auto">
                <nav class="nav nav-overflow py-2">
                    <a class="nav-link font-weight-normal text-xs" href="#katalog">
                        Katalog
                    </a>

                </nav>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</div>


      <!-- HERO
      ================================================== -->
<!-- HERO
================================================== -->
<section class="overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-xl-1 order-md-2 section pt-md-0 pb-0">

                <!-- Button -->
                <a href="#modal-video" class="btn btn-lg btn-circle btn-hero ml-4 bg-white shadow text-body d-none d-md-block" data-toggle="modal">
                    <i class="fas fa-play"></i>
                </a>

                <!-- Image -->
                    <div class="img-half">
                        <img src="assets/img/80.jpg" alt="Gambar Hero" class="img-cover img-incline-left">
                    </div>

            </div>
            <div class="col-12 col-md-6 col-xl-5 order-md-1 section">

                <!-- Preheading -->
                <p class="font-weight-medium text-xs text-uppercase text-primary" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                    Selamat Datang di Katalog Bumdes
                </p>

                <!-- Heading -->
                <h1 class="mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                    Temukan Terbaik dari Desa Kami
                </h1>

                <!-- Subheading -->
                <p class="mb-5 text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    Jelajahi tempat Bumdes dan Wisata terbaik di desa kami. Dari bisnis lokal hingga destinasi wisata menarik, temukan semua informasi yang Anda butuhkan di sini.
                </p>

                <!-- Button -->
                <a href="#katalog" class="btn btn-outline-primary" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
                    Lihat Katalog <i class="fas fa-arrow-right ml-2"></i>
                </a>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>



      <section class="section" id="katalog">
        <div class="container">
            <div class="row">
                @foreach ($katalogs as $item)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Item -->
                        <div class="position-relative">

                            <!-- Card -->
                            <a class="card border-0 mb-3" href="{{ route('katalog.show', $item->id) }}">

                                <!-- Image -->
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_wisata }}" class="card-img">
                                @endif

                                <!-- Body -->
                                <div class="card-body">

                                    <div class="row align-items-center mb-3">
                                        <div class="col">
                                            <!-- Heading -->
                                            <h4 class="card-title mb-0">
                                                {{ $item->nama_wisata }}
                                            </h4>
                                        </div>
                                    </div> <!-- / .row -->

                                    <!-- Text -->
                                    <p class="mb-0 text-sm text-muted">
                                        {{ Str::limit($item->description, 100) }}
                                    </p>

                                </div>

                            </a>

                            <!-- Button -->
                            <button class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add">
                                <i class="fas fa-plus"></i>
                            </button>

                        </div>
                    </div>
                @endforeach
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <x-footer></x-footer>
</x-portal-layout>

