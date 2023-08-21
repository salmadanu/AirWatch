<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PermohonanInstalasi;
use App\Models\Perusahaan;
use App\Models\Pabrik;
use App\Models\Pemerintah;
use App\Models\UkuranKualitasUdara;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Perusahaan::create([
            'nama_perusahaan' => 'PT Gemastik',
            'email_perusahaan' => 'gemastik@gmail.com',
            'username_perusahaan' => 'ptgemastik',
            'password_perusahaan' => '12345',
            'alamat_perusahaan' => 'Jl. Gemastik 1 Kota Gemastik 1234',
            'nomor_telfon_perusahaan' => '02112345',
            'jumlah_pabrik' => 3,
            'provinsi_perusahaan' => 'Jawa Barat',
            'kabupaten_perusahaan'=> 'Bogor Barat'
        ]);

        Pabrik::create([
            'perusahaan_id' => 1,
            'nama_pabrik' => 'Pabrik 1',
            'email_pabrik' => 'pabrik1@gmail.com',
            'alamat_pabrik' => 'Jl. Pabrik 1',
            'nomor_telfon_pabrik' => '02154321',
            'provinsi_pabrik' => 'Jawa Barat',
            'kabupaten_pabrik' => 'Bogor Barat'
        ]);

        Pemerintah::create([
            'email_pemerintah' => 'bdlhkbogor@gmail.com',
            'username_pemerintah' => 'blhkbogor',
            'password_pemerintah' => '12345'
        ]);

        PermohonanInstalasi::create([
            'jenis_sensor' => 'outdoor',
            'luas_pabrik' => '200',
            'status_persetujuan' => true
        ]);

        UkuranKualitasUdara::create([

        ]);
    }
}
