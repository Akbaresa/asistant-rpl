<?php

namespace Database\Seeders;

use App\Models\StoreFilePraktikan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreFilePraktikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_kegiatan_praktikum_range = range(1000, 1006);

        foreach($id_kegiatan_praktikum_range as $id_kegiatan_praktikum){
            StoreFilePraktikan::insert([
                'path_file_praktikan' => 'praktikum/' . ($id_kegiatan_praktikum - 999),
                'id_kegiatan_praktikum' => $id_kegiatan_praktikum
            ]);
        }
        foreach($id_kegiatan_praktikum_range as $id_kegiatan_praktikum){
            StoreFilePraktikan::insert([
                'path_file_praktikan' => 'asistensi/' . ($id_kegiatan_praktikum - 999),
                'id_file_tugas' => $id_kegiatan_praktikum
            ]);
        }
    }
}
