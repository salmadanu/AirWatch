<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanInstalasi extends Model
{
    use HasFactory;
    protected $table = 'permohonan_instalasi';
    protected $fillable = ['jenis_sensor', 'luas_pabrik', 'status_persetujuan'];
    protected $guarded = ['id_request'];
    public $timestamps = false;
}
