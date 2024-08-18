<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BumdesWisata extends Model
{
    use HasFactory;

    protected $table = 'bumdes_wisatas';

    protected $fillable = [
        'nama_bumdes_wisata',
        'kategori',
        'description',
        'image',
        'tanggal_awal_peminjaman',
        'jatuh_tempo_peminjaman',
    ];
}
