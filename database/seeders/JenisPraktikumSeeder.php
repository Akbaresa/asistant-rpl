<?php

namespace Database\Seeders;

use App\Models\JenisPraktikum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPraktikumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisPraktikum::insert([
            [
                'nama_jenis_praktikum' => 'Pemrograman Berorientasi Objek',
                'slug' => 'pbo',
            ],
            [
                'nama_jenis_praktikum' => 'Basis Data',
                'slug' => 'basdat',
            ],
            [
                'nama_jenis_praktikum' => 'Struktur Data',
                'slug' => 'strukdat',
            ],
            [
                'nama_jenis_praktikum' => 'Pemrograman Terstruktur',
                'slug' => 'petruk',
            ]
        ]);
    }
}
