<?php

namespace Database\Seeders;

use App\Models\Sesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sesi::insert([
            [
                'no_sesi' => '1',
                'waktu_mulai' => '15:10:00', 
                'waktu_selesai' => '16:00:00', 
            ],
            [
                'no_sesi' => '2',
                'waktu_mulai' => '16:10:00', 
                'waktu_selesai' => '17:00:00', 
            ],
            [
                'no_sesi' => '3',
                'waktu_mulai' => '18:10:00', 
                'waktu_selesai' => '19:00:00', 
            ],
        ]);
    }
}
