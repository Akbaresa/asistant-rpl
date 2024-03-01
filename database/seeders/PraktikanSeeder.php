<?php

namespace Database\Seeders;

use App\Models\Praktikan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PraktikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            Praktikan::insert([
                'nama' => 'Budi Doremi ' . $i,
                'npm' => '06.2022.1.074' . $i,
                'email' => 'praktikan' . $i . '@example.com',
                'password' => bcrypt('123'), 
                'no_wa' => $this->generateUniqueWhatsAppNumber()
            ]);
        }
    }

    private function generateUniqueWhatsAppNumber()
    {
        $faker = \Faker\Factory::create();

        $unique = false;
        $no_wa = '';
        while (!$unique) {
            $no_wa = $faker->unique()->numerify('081#########');
            if (!Praktikan::where('no_wa', $no_wa)->exists()) {
                $unique = true;
            }
        }

        return $no_wa;
    }
}
