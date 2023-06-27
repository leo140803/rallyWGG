<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $items = [
            [
                'nama' => 'Pohon Kuning',
                'scene' => 1,
                'harga' => 10,
            ],
            [
                'nama' => 'Pohon Merah',
                'scene' => 1,
                'harga' => 10,
            ],
            [
                'nama' => 'Bukit',
                'scene' => 1,
                'harga' => 15,
            ],
            [
                'nama' => 'Sungai',
                'scene' => 1,
                'harga' => 20,
            ],
            [
                'nama' => 'Rumput',
                'scene' => 1,
                'harga' => 5,
            ],
            [
                'nama' => 'Buah',
                'scene' => 1,
                'harga' => 5,
            ],
            [
                'nama' => 'Bunga',
                'scene' => 1,
                'harga' => 5,
            ],
            [
                'nama' => 'Kupu-kupu',
                'scene' => 1,
                'harga' => 15,
            ],
            [
                'nama' => 'Jerapah',
                'scene' => 1,
                'harga' => 15,
            ],
            [
                'nama' => 'Gedung 1',
                'scene' => 2,
                'harga' => 5,
            ],
            [
                'nama' => 'Gedung 2',
                'scene' => 2,
                'harga' => 8,
            ],
            [
                'nama' => 'Gedung 3',
                'scene' => 2,
                'harga' => 10,
            ],
            [
                'nama' => 'Gedung 4',
                'scene' => 2,
                'harga' => 12,
            ],
            [
                'nama' => 'Gedung 5',
                'scene' => 2,
                'harga' => 15,
            ],
            [
                'nama' => 'Gedung 6',
                'scene' => 2,
                'harga' => 20,
            ],
            [
                'nama' => 'Bianglala',
                'scene' => 2,
                'harga' => 7,
            ],
            [
                'nama' => 'Mobil',
                'scene' => 2,
                'harga' => 15,
            ],
            [
                'nama' => 'Kayu Penyangga',
                'scene' => 3,
                'harga' => 15,
            ],
            [
                'nama' => 'Tali',
                'scene' => 3,
                'harga' => 15,
            ],
            [
                'nama' => 'Balok Kayu',
                'scene' => 3,
                'harga' => 10,
            ],
        ];

        $i = 1;
        foreach ($items as $item) {
            $item['created_at'] = Time::now();
            $item['updated_at'] = Time::now();
            $this->db->table('item')->insert($item);

            $z = $faker->numberBetween(0, 10);
            $x = $faker->numberBetween(0, 100);
            $y = $faker->numberBetween(0, 100);
            $w = $faker->numberBetween(0, 100);

            $variant1 = [
                'id_item' => $i,
                'repaired' => 0,
                'image' => '/assets/images/items/' . $item['nama'] . '_0.png',
                'location_x' => $x,
                'location_y' => $y,
                'width' => $w,
                'z-index' => $z,
                'created_at' => Time::now(),
                'updated_at' => Time::now(),          
            ];

            $this->db->table('item_variants')->insert($variant1);
            $variant1['repaired'] = 1;
            $variant1['image'] = '/assets/images/items/' . $item['nama'] . '_1.png';
            $this->db->table('item_variants')->insert($variant1);

            $i++;
        }
    }
}
