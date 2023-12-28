<?php

namespace Database\Seeders;

use App\Models\SubKriteria;
use Illuminate\Database\Seeder;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usia
        SubKriteria::create([
            'kategori_kriteria'     => 'Usia',
            'bobot_subkriteria'     => '100',
            'keterangan'            => 'Usia 25 Tahun - 30 Tahun',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Usia',
            'bobot_subkriteria'     => '80',
            'keterangan'            => 'Usia 31 Tahun - 35 Tahun',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Usia',
            'bobot_subkriteria'     => '60',
            'keterangan'            => 'Usia 36 Tahun - 40 Tahun',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Usia',
            'bobot_subkriteria'     => '50',
            'keterangan'            => 'Usia >= 40 Tahun',
        ]);

        // Sertifikat
        SubKriteria::create([
            'kategori_kriteria'     => 'Sertifikat',
            'bobot_subkriteria'     => '100',
            'keterangan'            => 'Memiliki 3 Sertifikat',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Sertifikat',
            'bobot_subkriteria'     => '70',
            'keterangan'            => 'Memiliki 2 Sertifikat',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Sertifikat',
            'bobot_subkriteria'     => '50',
            'keterangan'            => 'Memiliki 1 Sertifikat',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Sertifikat',
            'bobot_subkriteria'     => '40',
            'keterangan'            => 'Tidak Memiliki Sertifikat',
        ]);

        // Pengalaman
        SubKriteria::create([
            'kategori_kriteria'     => 'Pengalaman',
            'bobot_subkriteria'     => '100',
            'keterangan'            => 'Memiliki Pengalaman >= 4 tahun',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Pengalaman',
            'bobot_subkriteria'     => '70',
            'keterangan'            => 'Memiliki Pengalaman  3 tahun',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Pengalaman',
            'bobot_subkriteria'     => '60',
            'keterangan'            => 'Memiliki Pengalaman 2 tahun',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Pengalaman',
            'bobot_subkriteria'     => '50',
            'keterangan'            => 'Memiliki Pengalaman <= 1 tahun',
        ]);

        // Berat Badan
        SubKriteria::create([
            'kategori_kriteria'     => 'Berat Badan',
            'bobot_subkriteria'     => '100',
            'keterangan'            => 'Memiliki berat badan 70 Kg - 75 Kg',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Berat Badan',
            'bobot_subkriteria'     => '80',
            'keterangan'            => 'Memiliki berat badan 76 Kg - 90 Kg',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Berat Badan',
            'bobot_subkriteria'     => '60',
            'keterangan'            => 'Memiliki berat badan 95 Kg - 100 Kg',
        ]);
        SubKriteria::create([
            'kategori_kriteria'     => 'Berat Badan',
            'bobot_subkriteria'     => '50',
            'keterangan'            => 'Memiliki berat badan 105 Kg - 110 Kg',
        ]);
    }
}
