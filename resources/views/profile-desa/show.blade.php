<x-portal-layout :title="'Profile'">
    <x-nav-bar-light></x-nav-bar-light>
        <!-- BREADCRUMB
    ================================================== -->
  <!-- BREADCRUMB ================================================== -->
<nav class="breadcrumb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!-- Heading -->
                <h5 class="breadcrumb-heading">Profil Desa</h5>
            </div>
            <div class="col-auto">
                <!-- Breadcrumb -->
                <span class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </span>
                <span class="breadcrumb-item active">Profil Desa</span>
            </div>
        </div>
    </div>
</nav>

<!-- HEADER ================================================== -->
<!-- HEADER ================================================== -->
<section class="section pb-0">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <!-- Header -->
                <div class="header">
                    <!-- Logo Desa -->
                    @if($profileDesa->logo_desa)
                        <img src="{{ asset('storage/' . $profileDesa->logo_desa) }}" alt="Logo Desa" style="max-width: 150px;">
                    @endif

                    <!-- Nama Desa -->
                    <h1 class="mb-2">Desa {{ $profileDesa->nama_desa }}</h1>

                    <!-- Alamat Desa -->
                    <p class="text-muted">{{ $profileDesa->alamat_desa }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ABOUT ================================================== -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- Title -->
                <h6 class="title">Tentang Desa</h6>
            </div>
            <div class="col-md-5">
                <!-- Heading -->
                <h3 class="mb-4">Profil <span class="text-primary">Visi</span></h3>

                <!-- Content -->
                <blockquote class="blockquote">
                    <p class="mb-0">{{ $profileDesa->visi_desa }}</p>
                </blockquote>
            </div>
            <div class="col-md-5">
                <h3 class="mb-4">Profil <span class="text-primary">Misi</span></h3>
                <!-- Content -->
                <blockquote class="blockquote">
                <p class="text-muted">                    @php
                    // Assuming missions are separated by new lines or commas
                    $missions = explode("\n", $profileDesa->misi_desa);
                @endphp
                @foreach($missions as $mission)
                    <li class="list-item">{{ trim($mission) }}</li>
                @endforeach</p>
                </blockquote>
            </div>
        </div>
    </div>
</section>


<!-- GOVERNANCE STRUCTURE ================================================== -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- Title -->
                <h6 class="title">Struktur Pemerintahan</h6>
            </div>
            <div class="col-md-10">
                <p>Struktur Pemerintahan:</p>
                @if($profileDesa->struktur_pemerintahan)
                    <img src="{{ asset('storage/' . $profileDesa->struktur_pemerintahan) }}" alt="Struktur Pemerintahan" class="img-fluid">
                @endif
                <p>Struktur BPD:</p>
                @if($profileDesa->struktur_bpd)
                    <img src="{{ asset('storage/' . $profileDesa->struktur_bpd) }}" alt="Struktur BPD" class="img-fluid">
                @endif
            </div>
        </div>
    </div>
</section>

<!-- HISTORY ================================================== -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- Title -->
                <h6 class="title">Sejarah Desa</h6>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <p>{{ $profileDesa->sejarah_desa }}</p>
                    </div>
                    <div class="col-md-6">
                        @if($profileDesa->gambar_sejarah_desa)
                            <img src="{{ asset('storage/' . $profileDesa->gambar_sejarah_desa) }}" alt="Gambar Sejarah Desa" class="img-fluid">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LOCATION MAP ================================================== -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- Title -->
                <h6 class="title">Peta Lokasi</h6>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget ultrices eros. Vestibulum placerat libero eu velit laoreet, non consectetur lectus tristique. Suspendisse viverra, magna porttitor eleifend malesuada, metus ex facilisis ex, sodales congue odio tellus at ante. Nullam in mollis nisl, nec elementum turpis. Maecenas sed nunc nisi. In hac habitasse platea dictumst. Fusce molestie in urna non vehicula. Maecenas semper eu nisl id consequat. Donec finibus, tellus et auctor tempus, eros massa ultrices nibh, et commodo ipsum tellus at nibh.
                    </div>
                    <div class="col-md-6">
                        @if($profileDesa->peta_lokasi_desa)
                            <img src="{{ asset('storage/' . $profileDesa->peta_lokasi_desa) }}" alt="Gambar Peta Lokasi Desa" class="img-fluid">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</x-portal-layout>
