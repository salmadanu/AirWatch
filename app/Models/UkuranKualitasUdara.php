<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkuranKualitasUdara extends Model
{
    use HasFactory;

    protected $fillable = ['aqi', 'so2', 'co', 'no2', 'o3', 'pm25', 'pm10'];
    protected $guarded = ['id_pabrik'];
}
