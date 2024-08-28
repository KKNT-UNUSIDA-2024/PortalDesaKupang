<x-portal-layout :title="'Profile'">
    <x-nav-bar-light></x-nav-bar-light>
<main class="fp-wrapper">
<section class="section section-top section-full">

  <!-- Cover -->
  <div class="bg-cover" style="background-image: url('{{ asset(json_decode($dusun->gambar)[0] ?? 'default.jpg') }}')">
  </div>

  <!-- Overlay -->
  <div class="bg-overlay"></div>

  <!-- Triangles -->
  <div class="bg-triangle bg-triangle-light bg-triangle-left bg-triangle-bottom"></div>
  <div class="bg-triangle bg-triangle-light bg-triangle-right bg-triangle-bottom"></div>

  <!-- Content -->
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12 col-md-8">

        <!-- Heading -->
        <h1 class="text-center text-white mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
          {{ $dusun->nama }}
        </h1>

        <!-- Subheading -->
        <p class="text-center text-white text-muted mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
          Dusun ini memiliki {{ $dusun->jumlah_rt }} RT dan {{ $dusun->jumlah_rw }} RW.
        </p>
       
        <p class="text-center text-white text-muted mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">{{ $dusun->deskripsi }}</p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>

<!-- ABOUT
================================================== -->
<section class="section pb-0">

  <!-- Content -->
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-5 offset-lg-1">
        
        <!-- Image -->
        <div class="img-effect img-effect-solid mb-5 mb-md-0">
          <img src="{{ asset(json_decode($dusun->gambar)[0] ?? 'default.jpg') }}" class="img-fluid" alt="{{ $dusun->nama }}">
        </div>

      </div>
      <div class="col-md-6 col-lg-4 offset-lg-1">

        <!-- Heading -->
        <h2 class="mb-4">
          Detail Dusun
        </h2>

        <!-- Content -->
        <p class="text-muted mb-0">
          <strong>Jumlah RT:</strong> {{ $dusun->jumlah_rt }}<br>
          <strong>Jumlah RW:</strong> {{ $dusun->jumlah_rw }}
        </p>
        
        <!-- Button -->
        <a href="{{ route('dusun.visitors') }}" class="btn btn-outline-primary mt-4">
          Kembali
        </a>
        
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>

<!-- MAP
================================================== -->
<section class="section">

  <!-- Content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">

        <!-- Heading -->
        <h2 class="text-center mb-4">
          Lokasi Dusun
        </h2>

      </div>
    </div> <!-- / .row -->
    <div class="row">
      <div class="col-12">

        <!-- Map -->
        <div class="map">
          <div class="map-container" data-markers="[[34.0872254,-118.4046315]]" data-zoom="8"></div>
        </div>
        
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>

</main>


</x-portal-layout>