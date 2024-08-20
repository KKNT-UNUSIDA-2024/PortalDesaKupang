<x-portal-layout>
<style>
    .isi {
        margin-top: 20vh; /* Margin atas 20% dari tinggi viewport */
        max-width: 95%; /* Maksimal lebar konten */
        margin-left: auto; /* Jarak kiri otomatis agar center */
        margin-right: auto; /* Jarak kanan otomatis agar center */
    }
    
    .section-title {
        font-weight: bold;
        text-align: center; /* Center-align title */
        margin-bottom: 1rem; /* Jarak bawah judul */
        font-size: 2.25rem; /* 36px */
        line-height: 2.5rem; /* 40px */
    }
    .section-content {
        margin-top: 0.5rem;
        font-size: 1.5rem; /* 24px */
        line-height: 2rem; /* 32px */
    }
    .image {
        max-width: 100%; /* Ukuran maksimal gambar */
        height: auto;
    }
    .list-item {
        margin-bottom: 0.5rem; /* Spacing between list items */
    }
    .margin-section {
        margin-top: 20vh;
    }
</style>
<div class="isi">
    <div class="container mx-auto px-4">
        <!-- Logo and Address Section -->
        <div class="grid grid-cols-2 gap-4 mb-8 text-white margin-section">
            <!-- Logo and Address -->
            <div class="flex flex-col items-start space-y-2">
                @if($profileDesa->logo_desa)
                    <img src="{{ asset('storage/' . $profileDesa->logo_desa) }}" alt="Logo Desa" class="logo mb-2"> <!-- Fixed size logo -->
                @endif
                <p class="section-title self-center">Desa Kupang</p>
                <p class="section-content self-center">{{ $profileDesa->alamat_desa }}</p>
            </div>

            <!-- Vision and Mission -->
            <div class="flex flex-col space-y-2">
                <p class="section-title">VISI:</p>
                <p class="section-content">{{ $profileDesa->visi_desa }}</p>
                <p class="section-title">MISI:</p>
                <ol class="section-content list-decimal list-inside space-y-2">
                    @php
                        // Assuming missions are separated by new lines or commas
                        $missions = explode("\n", $profileDesa->misi_desa);
                    @endphp
                    @foreach($missions as $mission)
                        <li class="list-item">{{ trim($mission) }}</li>
                    @endforeach
                </ol>
            </div>
        </div>

        <!-- Governance Structure Section -->
         <div class="m-8">
        <div class="grid grid-cols-1 gap-8 mb-8 text-white margin-section">
            <p class="section-title">Struktur Pemerintahan:</p>
            @if($profileDesa->struktur_pemerintahan)
                <img src="{{ asset('storage/' . $profileDesa->struktur_pemerintahan) }}" alt="Struktur Pemerintahan" class="h-auto max-w-lg rounded-lg">
            @endif
            <p class="section-title">Struktur BPD:</p>
            @if($profileDesa->struktur_bpd)
                <img src="{{ asset('storage/' . $profileDesa->struktur_bpd) }}" alt="Struktur BPD" class="h-auto max-w-lg rounded-lg">
            @endif
        </div>

        <!-- History Section -->
        <div class="grid grid-cols-2 gap-8 mb-8 text-white margin-section">
            <!-- History Text -->
            <div class="flex flex-col space-y-2">
                <p class="section-title">Sejarah Desa:</p>
                <p class="section-content">{{ $profileDesa->sejarah_desa }}</p>
            </div>

            <!-- History Image -->
            <div class="flex flex-col space-y-2">
                @if($profileDesa->gambar_sejarah_desa)
                    <img src="{{ asset('storage/' . $profileDesa->gambar_sejarah_desa) }}" alt="Gambar Sejarah Desa" class="h-auto max-w-lg rounded-lg">
                @endif
            </div>
        </div>

        <!-- Location Map Section -->
        <div class="grid grid-cols-2 gap-8 text-white margin-section">
            <!-- Location Info -->
            <div class="flex flex-col space-y-2">
                <p class="section-title">Peta Lokasi Desa:</p>
                @if($profileDesa->peta_lokasi_desa)
                    <p class="section-content">{{ $profileDesa->peta_lokasi_desa }}</p>
                @endif
            </div>

            <!-- Location Map Image -->
            <div class="flex flex-col space-y-2">
                @if($profileDesa->gambar_peta_lokasi_desa)
                    <img src="{{ asset('storage/' . $profileDesa->gambar_peta_lokasi_desa) }}" alt="Gambar Peta Lokasi Desa" class="image">
                @endif
            </div>
        </div>
    </div>
</div>
</x-portal-layout>
