<?php

namespace Database\Seeders;

use App\Models\FileTugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_jenis_tugas = 1001; 
        $id_pertemuan_pbo = range(1000, 1006); 
        $id_pertemuan_petruk = range(1018, 1021); 

        foreach ($id_pertemuan_pbo as $id_pertemuan) {
            $path_file_tugas = 'soal_asistensi/' . ($id_pertemuan - 999); 

            FileTugas::insert([
                'path_file_tugas' => $path_file_tugas,
                'id_jenis_tugas' => $id_jenis_tugas,
                'id_pertemuan' => $id_pertemuan,
            ]);
        }
        foreach ($id_pertemuan_petruk as $id_pertemuan) {
            $path_file_tugas = 'soal_asistensi/' . ($id_pertemuan - 999); 

            FileTugas::insert([
                'path_file_tugas' => $path_file_tugas,
                'id_jenis_tugas' => $id_jenis_tugas,
                'id_pertemuan' => $id_pertemuan,
            ]);
        }
    }
}
