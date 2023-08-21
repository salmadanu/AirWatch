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
        Schema::create('ukuran_kualitas_udara', function (Blueprint $table) {
            $table->foreignId('id_pabrik');
            $table->timestamps();
            $table->integer('aqi');
            $table->integer('so2');
            $table->integer('co');
            $table->integer('no2');
            $table->integer('o3');
            $table->float('pm25', 8, 1);
            $table->float('pm10', 8, 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukuran_kualitas_udara');
    }
};
