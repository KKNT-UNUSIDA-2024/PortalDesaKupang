<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    protected $table = 'profile_desa';

    protected $fillable = [
        'logo_desa',
        'alamat_desa',
        'nama_desa',
        'visi_desa',
        'misi_desa',
        'struktur_pemerintahan',
        'struktur_bpd',
        'sejarah_desa',
        'gambar_sejarah_desa',
        'peta_lokasi_desa',
        'luas_desa',
        'jumlah_penduduk_desa',
    ];
}
