<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDusunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dusuns', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('nama'); // Nama dusun
            $table->integer('jumlah_rt'); // Jumlah Rukun Tetangga
            $table->integer('jumlah_rw'); // Jumlah Rukun Warga
            $table->text('deskripsi')->nullable(); // Deskripsi dusun
            $table->json('gambar')->nullable(); // Menyimpan path gambar dalam format JSON
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dusuns'); // Menghapus tabel jika migrasi dibatalkan
    }
}