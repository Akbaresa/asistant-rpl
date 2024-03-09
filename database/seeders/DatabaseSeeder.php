<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(JenisPraktikumSeeder::class);
        $this->call(PraktikanSeeder::class);
        $this->call(RoleAslabSeeder::class);
        $this->call(ModulSeeder::class);
        $this->call(SesiSeeder::class);
        $this->call(JenisTugasSeeder::class);
        $this->call(PraktikumSeeder::class);
        $this->call(AslabSeeder::class);
        $this->call(PertemuanSeeder::class);
        $this->call(KegiatanPraktikumSeeder::class);
        $this->call(TemplateSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(FileTugasSeeder::class);
        $this->call(StoreFilePraktikanSeeder::class);
    }
}
