<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Pastikan ini diimpor

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
        'nama_penyewa',
        'biaya_penyewaan',
        'status', // Kolom baru
        'id_penyewaan',
    ];

    public function getStatusAttribute()
    {
        $today = Carbon::now()->toDateString();

        if ($this->tanggal_awal_peminjaman <= $today && $this->jatuh_tempo_peminjaman >= $today) {
            return 'aktif';
        }

        return 'tidak aktif';
    }
}
