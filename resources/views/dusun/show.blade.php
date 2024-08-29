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



</main>


</x-portal-layout>
