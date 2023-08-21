<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_perusahaan','email_perusahaan', 'username_perusahaan', 'password_perusahaan', 'alamat_perusahaan', 'logo_perusahaan', 'nomor_telfon_perusahaan', 'jumlah_pabrik', 'provinsi_perusahaan','kabupaten_perusahaan'];
    protected $guarded = ['id_perusahaan'];
}
