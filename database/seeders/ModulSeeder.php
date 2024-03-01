<?php

namespace Database\Seeders;

use App\Models\Modul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modul::insert([
            [
                'no_modul' => '1',
                'slug' => 'Konsep Database',
                'deskripsi' => 'Modul ini menjelaskan tentang pengertian Database'
            ],
            [
                'no_modul' => '2',
                'slug' => 'Instalasi Mysql',
                'deskripsi' => 'Modul ini menjelaskan tentang Instalasi Mysql'
            ],
            [
                'no_modul' => '1',
                'slug' => 'Function',
                'deskripsi' => 'Modul ini menjelaskan tentang function'
            ],
            [
                'no_modul' => '2',
                'slug' => 'Linked List',
                'deskripsi' => 'Modul ini menjelaskan tentang Linked List'
            ],
        ]);
    }
}
