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
        Schema::create('permohonan_instalasi', function (Blueprint $table) {
            $table->increments('id_request');
            $table->string('jenis_sensor');
            $table->integer('luas_pabrik');
            $table->boolean('status_persetujuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_instalasi');
    }
};
