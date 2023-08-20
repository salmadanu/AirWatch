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
        Schema::create('pabrik', function (Blueprint $table) {
            $table->increments('id_pabrik');
            $table->foreignId('perusahaan_id');
            $table->string('nama_pabrik');
            $table->string('email_pabrik');
            $table->string('alamat_pabrik');
            $table->string('nomor_telfon_pabrik');
            $table->string('provinsi_pabrik');
            $table->string('kabupaten_pabrik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pabrik');
    }
};
