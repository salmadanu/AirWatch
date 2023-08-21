<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pabrik extends Model
{
    use HasFactory;

    protected $fillable = ['perusahaan_id', 'nama_pabrik', 'email_pabrik', 'alamat_pabrik','nomor_telfon_pabrik', 'provinsi_pabrik', 'kabupaten_pabrik'];
    protected $guarded = ['id_pabrik'];
}
