<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menyimpan data ke dalam tabel 'mahasiswa' menggunakan query builder
        DB::table('mahasiswas')->insert([
            'nama' => 'Husain Abidin',
            'nim' => '21060120130155',
            'gender' => 'L',
            'konsentrasi' => 'Teknologi Informasi',
            'asal' => 'Jakarta',
        ]);

        // Menyimpan data lainnya...
    }
}
