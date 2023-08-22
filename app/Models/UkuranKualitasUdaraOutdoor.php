<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkuranKualitasUdaraOutdoor extends Model
{
    use HasFactory;
    protected $table = 'ukuran_kualitas_udara_outdoor';
    protected $fillable = ['id_pabrik','aqi', 'so2', 'co', 'no2', 'o3', 'pm25', 'pm10'];
}
