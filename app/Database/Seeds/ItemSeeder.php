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
                'nama' => 'Pohon 1',
                'scene' => 1,
                'harga' => 10000,
                'repaired' => 0,
                'image' => 'assets/climate/pohon-kuning.png',
                'width' => 99,
                'height' => 105,
                'z-index' => 2,
            ],
            [
                'nama' => 'Pohon 1',
                'scene' => 1,
                'harga' => 10,
                'repaired' => 1,
                'image' => 'assets/climate/pohon-kuning-repaired.png',
                'shop_image' => 'assets/climate/pohon-kuning-shop.png',
                'width' => 99,
                'height' => 105,
                'z-index' => 2,
            ],
            [
                'nama' => 'Pohon 2',
                'scene' => 1,
                'harga' => 10000,
                'repaired' => 0,
                'image' => 'assets/climate/pohon-merah.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 2,
            ],
            [
                'nama' => 'Pohon 2',
                'scene' => 1,
                'harga' => 10,
                'repaired' => 1,
                'image' => 'assets/climate/pohon-merah-repaired.png',
                'shop_image' => 'assets/climate/pohon-merah-shop.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 2,
            ],
            [
                'nama' => 'Background',
                'scene' => 1,
                'harga' => 10000,
                'repaired' => 0,
                'image' => 'assets/climate/background.png',
                'width' => 99,
                'height' => 100,
                'z-index' => -2,
            ],
            [
                'nama' => 'Background',
                'scene' => 1,
                'harga' => 10000,
                'repaired' => 1,
                'image' => 'assets/climate/background-repaired.png',
                'width' => 99,
                'height' => 100,
                'z-index' => -2,
            ],
            [
                'nama' => 'Tanah',
                'scene' => 1,
                'harga' => 10000,
                'repaired' => 0,
                'image' => 'assets/climate/tanah.png',
                'width' => 99,
                'height' => 100,
                'z-index' => -2,
            ],
            [
                'nama' => 'Tanah',
                'scene' => 1,
                'harga' => 10000,
                'repaired' => 1,
                'image' => 'assets/climate/tanah-repaired.png',
                'width' => 99,
                'height' => 100,
                'z-index' => -2,
            ],
            [
                'nama' => 'Sungai',
                'scene' => 1,
                'harga' => 10000,
                'repaired' => 0,
                'image' => 'assets/climate/sungai.png',
                'width' => 85,
                'height' => 115,
                'z-index' => 2,
            ],
            [
                'nama' => 'Sungai',
                'scene' => 1,
                'harga' => 20,
                'repaired' => 1,
                'image' => 'assets/climate/sungai-repaired.png',
                'shop_image' => 'assets/climate/sungai-shop.png',
                'width' => 85,
                'height' => 115,
                'z-index' => 2,
            ],
            [
                'nama' => 'Bukit',
                'scene' => 1,
                'harga' => 15,
                'repaired' => 1,
                'image' => 'assets/climate/bukit.png',
                'shop_image' => 'assets/climate/bukit-shop.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 0,
            ],
            [
                'nama' => 'Rumput',
                'scene' => 1,
                'harga' => 5,
                'repaired' => 1,
                'image' => 'assets/climate/rumput.png',
                'shop_image' => 'assets/climate/rumput-shop.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 3,
            ],
            [
                'nama' => 'Buah',
                'scene' => 1,
                'harga' => 5,
                'repaired' => 1,
                'image' => 'assets/climate/buah.png',
                'shop_image' => 'assets/climate/buah-shop.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 3,
            ],
            [
                'nama' => 'Bunga',
                'scene' => 1,
                'harga' => 5,
                'repaired' => 1,
                'image' => 'assets/climate/bunga.png',
                'shop_image' => 'assets/climate/bunga-shop.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 3,
            ],
            [
                'nama' => 'Kupu-kupu',
                'scene' => 1,
                'harga' => 15,
                'repaired' => 1,
                'image' => 'assets/climate/kupu.png',
                'shop_image' => 'assets/climate/kupu-shop.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 3,
            ],
            [
                'nama' => 'Jerapah',
                'scene' => 1,
                'harga' => 15,
                'repaired' => 1,
                'image' => 'assets/climate/jerapah.png',
                'shop_image' => 'assets/climate/jerapah-shop.png',
                'width' => 99,
                'height' => 100,
                'z-index' => 3,
            ],
            // [
            //     'nama' => 'Gedung 1',
            //     'scene' => 2,
            //     'harga' => 5,
            // ],
            // [
            //     'nama' => 'Gedung 2',
            //     'scene' => 2,
            //     'harga' => 8,
            // ],
            // [
            //     'nama' => 'Gedung 3',
            //     'scene' => 2,
            //     'harga' => 10,
            // ],
            // [
            //     'nama' => 'Gedung 4',
            //     'scene' => 2,
            //     'harga' => 12,
            // ],
            // [
            //     'nama' => 'Gedung 5',
            //     'scene' => 2,
            //     'harga' => 15,
            // ],
            // [
            //     'nama' => 'Gedung 6',
            //     'scene' => 2,
            //     'harga' => 20,
            // ],
            // [
            //     'nama' => 'Bianglala',
            //     'scene' => 2,
            //     'harga' => 7,
            // ],
            // [
            //     'nama' => 'Mobil',
            //     'scene' => 2,
            //     'harga' => 15,
            // ],
            // [
            //     'nama' => 'Kayu Penyangga',
            //     'scene' => 3,
            //     'harga' => 15,
            // ],
            // [
            //     'nama' => 'Tali',
            //     'scene' => 3,
            //     'harga' => 15,
            // ],
            // [
            //     'nama' => 'Balok Kayu',
            //     'scene' => 3,
            //     'harga' => 10,
            // ],
        ];

        $i = 1;
        foreach ($items as $item) {
            $item['created_at'] = Time::now();
            $item['updated_at'] = Time::now();
            $this->db->table('item')->insert($item);
        }
    }
}
