<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    use HasFactory;

    protected $table = 'dusuns';

    protected $fillable = [
        'nama',
        'slug', // Tambahkan slug
        'jumlah_rt',
        'jumlah_rw',
        'deskripsi',
        'gambar',
    ];


    
}
