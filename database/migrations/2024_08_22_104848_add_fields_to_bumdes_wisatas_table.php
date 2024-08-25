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
        Schema::table('bumdes_wisatas', function (Blueprint $table) {
            $table->string('nama_penyewa')->nullable();
            $table->decimal('biaya_penyewaan', 10, 2)->nullable();
            $table->string('status')->nullable(); // Tidak ada nilai default
            $table->string('id_penyewaan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bumdes_wisatas', function (Blueprint $table) {
            $table->dropColumn('nama_penyewa');
            $table->dropColumn('biaya_penyewaan');
            $table->dropColumn('status');
            $table->dropColumn('id_penyewaan');
        });
    }
};
