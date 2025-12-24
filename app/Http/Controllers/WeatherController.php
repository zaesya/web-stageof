<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        // URL API BMKG 
        $url = 'https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4=31.71.01.1001';

        try {
            $response = Http::timeout(10)->get($url);

            // Kalau request gagal
            if (!$response->successful()) {
                return view('home', [
                    'cuaca' => null,
                    'error' => 'Gagal mengambil data cuaca',
                ]);
            }

            $json = $response->json();

            /**
             * Struktur BMKG:
             * data[0].cuaca[hari][jam]
             * Kita ambil data TERDEKAT:
             * hari = 0, jam = 0
             */
           $prakiraan = null;

            if (
                isset($json['data'][0]['cuaca']) &&
                is_array($json['data'][0]['cuaca'])
            ) {
                foreach ($json['data'][0]['cuaca'] as $harian) {
                    if (isset($harian[0]) && is_array($harian[0])) {
                        $prakiraan = $harian[0];
                        break;
                    }
                }
            }

            $cuaca = [
                'suhu'       => $prakiraan['t'] ?? null,
                'kelembapan' => $prakiraan['hu'] ?? null,
                'angin'      => $prakiraan['ws'] ?? null,
                'arah_angin' => $prakiraan['wd'] ?? null,
            ];

            return view('stitch-page', compact('cuaca'));

        } catch (\Throwable $e) {
            return view('stitch-page', [
                'cuaca' => null,
                'error' => 'Terjadi kesalahan saat memuat data',
            ]);
        }
    }
}
