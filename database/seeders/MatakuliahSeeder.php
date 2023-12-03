<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menyimpan data ke dalam tabel 'matakuliah' menggunakan query builder
        DB::table('matakuliahs')->insert([
            'nama_matkul' => 'Metode Pemrograman Modern',
            'dosen_pengampu' => 'Pak Arfan',
            'bobot_sks' => '2',
            'kehadiran' => '12',
        ]);

        // Menyimpan data lainnya...
    }
}
