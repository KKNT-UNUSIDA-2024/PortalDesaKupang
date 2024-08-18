<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile_desa', function (Blueprint $table) {
            $table->id();
            $table->string('logo_desa')->nullable();
            $table->string('alamat_desa');
            $table->string('nama_desa'); // Menambahkan kolom nama_desa
            $table->text('visi_desa');
            $table->text('misi_desa');
            $table->string('struktur_pemerintahan')->nullable();
            $table->string('struktur_bpd')->nullable();
            $table->text('sejarah_desa');
            $table->string('gambar_sejarah_desa')->nullable();
            $table->string('peta_lokasi_desa')->nullable();
            $table->float('luas_desa');
            $table->integer('jumlah_penduduk_desa');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
