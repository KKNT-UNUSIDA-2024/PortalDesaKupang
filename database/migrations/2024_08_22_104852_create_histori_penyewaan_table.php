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
        Schema::create('histori_penyewaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bumdes_wisata_id')->constrained('bumdes_wisatas')->onDelete('cascade');
            $table->date('tanggal_awal_peminjaman');
            $table->date('jatuh_tempo_peminjaman');
            $table->decimal('biaya_penyewaan', 10, 2);
            $table->string('nama_penyewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histori_penyewaan');
    }
};
