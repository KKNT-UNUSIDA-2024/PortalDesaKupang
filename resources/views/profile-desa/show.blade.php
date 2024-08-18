@extends('layouts.portal')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">{{ $profileDesa->nama_desa }}</h1>

    @if($profileDesa->logo_desa)
        <img src="{{ asset('storage/' . $profileDesa->logo_desa) }}" alt="Logo Desa" class="mb-4">
    @endif

    <p><strong>Alamat:</strong> {{ $profileDesa->alamat_desa }}</p>
    <p><strong>VISI:</strong> {{ $profileDesa->visi_desa }}</p>
    <p><strong>MISI:</strong> {{ $profileDesa->misi_desa }}</p>
    
    @if($profileDesa->struktur_pemerintahan)
        <img src="{{ asset('storage/' . $profileDesa->struktur_pemerintahan) }}" alt="Struktur Pemerintahan" class="mb-4">
    @endif

    @if($profileDesa->struktur_bpd)
        <img src="{{ asset('storage/' . $profileDesa->struktur_bpd) }}" alt="Struktur BPD" class="mb-4">
    @endif

    <p><strong>Sejarah Desa:</strong> {{ $profileDesa->sejarah_desa }}</p>
    
    @if($profileDesa->gambar_sejarah_desa)
        <img src="{{ asset('storage/' . $profileDesa->gambar_sejarah_desa) }}" alt="Gambar Sejarah Desa" class="mb-4">
    @endif
    
    @if($profileDesa->peta_lokasi_desa)
        <img src="{{ asset('storage/' . $profileDesa->peta_lokasi_desa) }}" alt="Peta Lokasi Desa" class="mb-4">
    @endif

    <p><strong>Luas Desa:</strong> {{ $profileDesa->luas_desa }} ha</p>
    <p><strong>Jumlah Penduduk Desa:</strong> {{ $profileDesa->jumlah_penduduk_desa }}</p>
</div>
@endsection
