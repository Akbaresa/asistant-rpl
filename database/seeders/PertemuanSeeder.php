<?php

namespace Database\Seeders;

use App\Models\Pertemuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertemuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_praktikum_rpl = [1000, 1001];
        $id_praktikums_basprog = [1002, 1003];

        foreach ($id_praktikum_rpl as $id_praktikum) {
            for ($no_pertemuan = 1; $no_pertemuan <= 7; $no_pertemuan++) {
                Pertemuan::create([
                    'no_pertemuan' => $no_pertemuan,
                    'id_praktikum' => $id_praktikum,
                ]);
            }
        }
        foreach ($id_praktikums_basprog as $id_praktikum) {
            for ($no_pertemuan = 1; $no_pertemuan <= 4; $no_pertemuan++) {
                Pertemuan::create([
                    'no_pertemuan' => $no_pertemuan,
                    'id_praktikum' => $id_praktikum,
                ]);
            }
        }
    }
}
