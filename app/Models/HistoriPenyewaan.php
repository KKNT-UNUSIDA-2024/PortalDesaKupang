<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Pastikan ini diimpor

class HistoriPenyewaan extends Model
{
    use HasFactory;

    protected $table = 'histori_penyewaan';

    protected $fillable = [
        'bumdes_wisata_id',
        'nama_penyewa',
        'tanggal_mulai',
        'tanggal_selesai',
        'biaya_penyewaan',
    ];
    public function bumdesWisata()
    {
        return $this->belongsTo(BumdesWisata::class);
    }

}
