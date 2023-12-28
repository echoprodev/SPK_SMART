<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kriteria::create([
            'nama_kriteria'  => 'Usia',
            'bobot_kriteria' => '40',
            'normalisasi_kriteria'    => '0.4',
        ]);

        Kriteria::create([
            'nama_kriteria'  => 'Sertifikat',
            'bobot_kriteria' => '30',
            'normalisasi_kriteria'    => '0.3',
        ]);

        Kriteria::create([
            'nama_kriteria'  => 'Pengalaman',
            'bobot_kriteria' => '20',
            'normalisasi_kriteria'    => '0.2',
        ]);

        Kriteria::create([
            'nama_kriteria'  => 'Berat Badan',
            'bobot_kriteria' => '10',
            'normalisasi_kriteria'    => '0.1',
        ]);
    }
}
