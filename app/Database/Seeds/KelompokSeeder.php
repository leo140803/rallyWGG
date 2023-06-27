<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class KelompokSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i=1; $i <= 30; $i++) {
            $nama = 'ISD-' . $i;

            if ($i > 20)
                $nama = 'Finest-' . ($i - 20);

            $dataKel = [
                'nama' => $nama,
                'ruangan' => 'P.' . $faker->randomNumber(3, true),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),            
            ];
            $this->db->table('kelompok')->insert($dataKel);

            $dataKelRally = [
                'id_kelompok' => $i,
                'poin' => 200,
                'scene' => $faker->numberBetween(1, 3),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),          
            ];
            $this->db->table('kelompok_rally')->insert($dataKelRally);
        }
    }
}
