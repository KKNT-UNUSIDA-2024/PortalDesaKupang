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
        Schema::create('bumdes_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bumdes_wisata');
            $table->string('kategori');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->date('tanggal_awal_peminjaman')->nullable();
            $table->date('jatuh_tempo_peminjaman')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bumdes_wisatas');
    }
};
