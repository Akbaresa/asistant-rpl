<?php

namespace Database\Seeders;

use App\Models\PapanInformasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PapanInformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PapanInformasi::insert([
            [
                'id_praktikum' => 9000,
                'slug' => 'Informasi Praktikum Basis data 2024',
                'deskripsi' => 'jadi tata cara praktikum ...' 
            ],
            [
                'id_praktikum' => 9001,
                'slug' => 'Informasi Praktikum Pemrograman Terstruktur 2024',
                'deskripsi' => 'jadi tata cara praktikum ...' 
            ],
        ]);
    }
}
