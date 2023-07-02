<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'item';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'scene', 'harga', 'repaired', 'shop_image', 'width', 'height', 'z-index', 'created_at', 'updated_at', 'deleted_at'];

    /**
      * Fungsi untuk mendapatkan item yang akan ditampilkan
      *
      * @param array $records
      * @return App\Models\ItemModel
      */
    public function get_display_item($records) {
        $default = $this->get_broken_item();

        $q = $this->join('item_img', 'item_img.id_item = item.id')->where('scene', session()->get('kelompok')['scene']);

        // blm pernah beli
        if (count($records) == 0) {
          $items = $default;
        }

        // sdh pernah beli
        else {
          $q = $q->whereIn('item.id', $records)->findAll();

          foreach($q as $item)
            foreach($default as $d)
              if ($item['nama'] == $d['nama'])
                unset($default[array_search($d, $default)]);

          $items = array_merge($q, $default);
        }

        return $items;
    }

    /**
      * Fungsi untuk mendapatkan item yang akan ada di shop
      *
      * @param array $records
      * @return App\Models\ItemModel
      */
    public function get_shop_item($records) {
        $q = $this
        ->where([
          'scene' => session()->get('kelompok')['scene'],
          'repaired' => 1,
        ])
        ->where('shop_image IS NOT NULL', null, false);

        if (count($records) > 0) {
          $q = $q->whereNotIn('id', $records);
        }
        
        // dd($q->findAll());
        return $q->findAll();
    }

    
    public function get_broken_item() {
        return $this->join('item_img', 'item_img.id_item = item.id')
        ->where([
          'scene' => session()->get('kelompok')['scene'],
          'repaired' => 0,
        ])
        ->findAll();
    }

    public function get_item($id) {
      return $this->join('item_img', 'item_img.id_item = item.id')->whereIn('item.id', $id)->findAll();
    }
}
