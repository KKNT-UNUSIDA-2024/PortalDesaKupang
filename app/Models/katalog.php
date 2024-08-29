<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
        use HasFactory;

        protected $table = 'katalog';

        // Tentukan nama tabel
        protected $fillable = [
                'nama_wisata',
                'description',
                'image',
            ];
}
