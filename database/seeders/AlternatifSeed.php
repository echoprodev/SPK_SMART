<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class AlternatifSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('alternatif')->insert([
                'nama_lengkap' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
                'usia_alternatif' => $faker->numberBetween(25, 35),
                'bb_alternatif' => $faker->numberBetween(70, 90),
                'pengalaman_alternatif' => $faker->numberBetween(3, 4),
                'Sertifikat_alternatif' => $faker->numberBetween(2, 3),
                'alamat' => $faker->address
            ]);
        }
    }
}
