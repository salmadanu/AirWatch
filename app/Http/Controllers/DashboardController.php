<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UkuranKualitasUdaraOutdoor;
use App\Models\UkuranKualitasUdaraIndoor;
use App\Models\Pabrik;
use App\Models\Pemerintah;
use App\Models\PermohonanInstalasi;
use App\Models\Perusahaan;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $aqiData = UkuranKualitasUdaraOutdoor::pluck('aqi')->toArray();
        $so2Data = UkuranKualitasUdaraOutdoor::pluck('so2')->toArray();
        $coData = UkuranKualitasUdaraOutdoor::pluck('co')->toArray();
        $no2Data = UkuranKualitasUdaraOutdoor::pluck('no2')->toArray();
        $o3Data = UkuranKualitasUdaraOutdoor::pluck('o3')->toArray();
        $pm25Data = UkuranKualitasUdaraOutdoor::pluck('pm25')->toArray();
        $pm10Data = UkuranKualitasUdaraOutdoor::pluck('pm10')->toArray();

        return view('dashboard', [
            'aqi' => $aqiData,
            'so2' => $so2Data,
            'co' => $coData,
            'no2' => $no2Data,
            'o3' => $o3Data,
            'pm25' => $pm25Data,
            'pm10' => $pm10Data,
        ]);
    }
}
