<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToDusunsTable extends Migration
{
    public function up()
    {
        Schema::table('dusuns', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('nama'); // Menambahkan kolom slug dengan nullable
        });
    }

    public function down()
    {
        Schema::table('dusuns', function (Blueprint $table) {
            $table->dropColumn('slug'); // Menghapus kolom slug jika migrasi dibatalkan
        });
    }
}