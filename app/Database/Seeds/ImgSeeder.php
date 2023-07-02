<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ImgSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $img = [
            [
                'id_item' => 1,
                'image' => 'assets/climate/pohon-kuning.png',
            ],
            [
                'id_item' => 2,
                'image' => 'assets/climate/pohon-kuning-repaired.png',
            ],
            [
                'id_item' => 3,
                'image' => 'assets/climate/pohon-merah.png',
            ],
            [
                'id_item' => 4,
                'image' => 'assets/climate/pohon-merah-repaired.png',
            ],
            [
                'id_item' => 5,
                'image' => 'assets/climate/background.png',
            ],
            [
                'id_item' => 6,
                'image' => 'assets/climate/background-repaired.png',
            ],
            [
                'id_item' => 7,
                'image' => 'assets/climate/tanah.png',
            ],
            [
                'id_item' => 8,
                'image' => 'assets/climate/tanah-repaired.png',
            ],
            [
                'id_item' => 9,
                'image' => 'assets/climate/sungai.png',
            ],
            [
                'id_item' => 10,
                'image' => 'assets/climate/sungai-repaired.png',
            ],
            [
                'id_item' => 11,
                'image' => 'assets/climate/bukit.png',
            ],
            [
                'id_item' => 12,
                'image' => 'assets/climate/rumput.png',
            ],
            [
                'id_item' => 13,
                'image' => 'assets/climate/buah.png',
            ],
            [
                'id_item' => 14,
                'image' => 'assets/climate/bunga.png',
            ],
            [
                'id_item' => 15,
                'image' => 'assets/climate/kupu.png',
            ],
            [
                'id_item' => 16,
                'image' => 'assets/climate/jerapah.png',
            ],

            // Eco
            [
                'id_item' => 17,
                'image' => 'assets/eco/red.png',
            ],
            [
                'id_item' => 18,
                'image' => 'assets/eco/orange1.png',
            ],
            [
                'id_item' => 18,
                'image' => 'assets/eco/orange2.png',
            ],
            [
                'id_item' => 19,
                'image' => 'assets/eco/yellow1.png',
            ],
            [
                'id_item' => 19,
                'image' => 'assets/eco/yellow2.png',
            ],
            [
                'id_item' => 20,
                'image' => 'assets/eco/green1.png',
            ],
            [
                'id_item' => 20,
                'image' => 'assets/eco/green2.png',
            ],
            [
                'id_item' => 21,
                'image' => 'assets/eco/blue1.png',
            ],
            [
                'id_item' => 21,
                'image' => 'assets/eco/blue2.png',
            ],
            [
                'id_item' => 22,
                'image' => 'assets/eco/purple.png',
            ],
            [
                'id_item' => 23,
                'image' => 'assets/eco/bianglala.png',
            ],
            [
                'id_item' => 24,
                'image' => 'assets/eco/car1.png',
            ],
            [
                'id_item' => 24,
                'image' => 'assets/eco/car2.png',
            ],
            [
                'id_item' => 24,
                'image' => 'assets/eco/car3.png',
            ],
            [
                'id_item' => 24,
                'image' => 'assets/eco/car4.png',
            ],
            [
                'id_item' => 24,
                'image' => 'assets/eco/car5.png',
            ],
            [
                'id_item' => 25,
                'image' => 'assets/eco/background.png',
            ],
            [
                'id_item' => 26,
                'image' => 'assets/eco/sky.png',
            ],
            [
                'id_item' => 27,
                'image' => 'assets/eco/road.png',
            ],
        ];

        foreach ($img as $i) {
            $i['created_at'] = Time::now();
            $i['updated_at'] = Time::now();
            $this->db->table('item_img')->insert($i);
        }
    }
}
