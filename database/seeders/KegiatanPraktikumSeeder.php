<?php

namespace Database\Seeders;

use App\Models\KegiatanPraktikum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanPraktikumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_pertemuan_pbo = range(1000, 1007);
        $id_pertemuan_petruk = range(1018, 1021);
        $id_sesi_pattern = [1000, 1001, 1002]; 

        $tanggal_awal = '2024-03-06';

        foreach ($id_pertemuan_pbo as $id_pertemuan) {
            $tanggal = $tanggal_awal;
            foreach ($id_sesi_pattern as $id_sesi) {
                KegiatanPraktikum::create([
                    'id_pertemuan' => $id_pertemuan,
                    'id_sesi' => $id_sesi,
                    'tanggal' => $tanggal,
                ]);
                $tanggal = date('Y-m-d', strtotime('+1 week', strtotime($tanggal)));
            }
        }

        foreach ($id_pertemuan_petruk as $id_pertemuan) {
            $tanggal = $tanggal_awal;
            foreach ($id_sesi_pattern as $id_sesi) {
                KegiatanPraktikum::create([
                    'id_pertemuan' => $id_pertemuan,
                    'id_sesi' => $id_sesi,
                    'tanggal' => $tanggal,
                ]);
                $tanggal = date('Y-m-d', strtotime('+1 week', strtotime($tanggal)));
            }
        }

    }
}
