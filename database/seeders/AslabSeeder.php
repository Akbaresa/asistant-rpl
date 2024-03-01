<?php

namespace Database\Seeders;

use App\Models\Aslab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AslabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aslab::insert([
            [
                'nama' => 'Maulana Akbar Esa Putra',
                'npm' => '06.2021.1.07462',
                'email' => 'esa@gmail.com',
                'password' => '123',
                'no_wa' => '123',
                'id_role_aslab' => 9002
            ],
            [
                'nama' => 'Havidz Ubaidillah',
                'npm' => '06.2021.1.07461',
                'email' => 'haviz@gmail.com',
                'password' => '123',
                'no_wa' => '1234',
                'id_role_aslab' => 9002
            ],
            [
                'nama' => 'M Mahameru',
                'npm' => '06.2021.1.07412',
                'email' => 'meru@gmail.com',
                'password' => '123',
                'no_wa' => '1235',
                'id_role_aslab' => 9001
            ],
            [
                'nama' => 'Ibrahim',
                'npm' => '06.2021.1.07422',
                'email' => 'ibra@gmail.com',
                'password' => '123',
                'no_wa' => '1236',
                'id_role_aslab' => 9001
            ],
        ]);
    }
}
