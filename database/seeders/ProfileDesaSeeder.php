<?php

use Illuminate\Database\Seeder;
use App\Models\ProfileDesa; // Pastikan kamu menggunakan model yang benar

class ProfileDesaSeeder extends Seeder
{
    public function run(): void
    {
        ProfileDesa::create([
            'nama_desa' => 'Desa Contoh',
            'logo_desa' => 'logo_default.png',
            'alamat_desa' => 'Jl. Desa No. 1, Kecamatan Contoh, Kabupaten Demo',
            'visi_desa' => 'Visi Desa Contoh',
            'misi_desa' => 'Misi Desa Contoh',
            'struktur_pemerintahan' => 'struktur_pemerintahan_default.png',
            'struktur_bpd' => 'struktur_bpd_default.png',
            'sejarah_desa' => 'Sejarah Desa Contoh',
            'gambar_sejarah_desa' => 'gambar_sejarah_default.png',
            'peta_lokasi_desa' => 'peta_lokasi_default.png',
            'luas_desa' => 123.45,
            'jumlah_penduduk_desa' => 6789,
        ]);
    }
}

