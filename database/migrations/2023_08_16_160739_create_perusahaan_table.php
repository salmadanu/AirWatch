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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->increments('id_perusahaan');
            $table->string('nama_perusahaan');
            $table->string('email_perusahaan')->unique();
            $table->string('username_perusahaan');
            $table->string('password_perusahaan');
            $table->text('alamat_perusahaan');
            $table->binary('logo_perusahaan')->nullable();
            $table->string('nomor_telfon_perusahaan');
            $table->integer('jumlah_pabrik');
            $table->string('provinsi_perusahaan');
            $table->string('kabupaten_perusahaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
