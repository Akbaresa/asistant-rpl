<?php

namespace Database\Seeders;

use App\Models\JenisTugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisTugas::insert([
            [
                'nama_jenis_tugas' => 'evaluasi'
            ],
            [
                'nama_jenis_tugas' => 'asistensi'
            ],
            [
                'nama_jenis_tugas' => 'sikap'
            ],
        ]);
    }
}
