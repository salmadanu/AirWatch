<?php

namespace Database\Seeders;

use App\Models\UkuranKualitasUdaraIndoor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirQualityDataSeederIndoor extends Seeder
{
    public function run()
    {
        $date = '2023-09-01';
        for ($hour = 0; $hour < 24; $hour++) {
            $data = [
                'id_pabrik' => 1,
                'created_at' => $date . ' ' . sprintf('%02d', $hour) . ':00:00',
                'aqi' => rand(90, 200),  // Random AQI value
                'so2' => rand(100, 150),   // Random SO2 value
                'co' => rand(900, 2000),  // Random CO value
                'no2' => rand(20, 50),  // Random NO2 value
                'o3' => rand(30, 60),   // Random O3 value
                'pm25' => rand(80.0, 95.0) / 10.0, // Random PM2.5 value (float)
                'pm10' => rand(50.0, 80.0) / 10.0, // Random PM10 value (float)
            ];

            UkuranKualitasUdaraIndoor::create($data);
        }
    }
}
