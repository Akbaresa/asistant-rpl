<?php

namespace Database\Seeders;

use App\Models\AlasanOnline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlasanOnlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlasanOnline::insert([
            [
                'nama_alasan' => 'lembur kerja',
                'path' => 'path file',
                'id_penilaian' => 1000
            ]
        ]);
    }
}
