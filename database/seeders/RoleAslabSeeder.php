<?php

namespace Database\Seeders;

use App\Models\RoleAslab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAslabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleAslab::insert([
            [
                'nama_role' => 'admin'
            ],
            [
                'nama_role' => 'basprog'
            ],
            [
                'nama_role' => 'rpl'
            ]
        ]);
    }
}
