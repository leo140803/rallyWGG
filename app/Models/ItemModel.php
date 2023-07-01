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
    protected $allowedFields    = ['nama', 'scene', 'harga', 'repaired', 'image', 'shop_image', 'width', 'height', 'z-index', 'created_at', 'updated_at', 'deleted_at'];

    /**
      * Fungsi untuk mendapatkan item yang akan ditampilkan
      *
      * @param array $records
      * @return App\Models\ItemModel
      */
    public function get_display_item($records) {
        $default = $this->get_unrepaired_item();
        // dd($default);
        $q = $this->where('scene', session()->get('kelompok')['scene']);

        // blm pernah beli
        if (count($records) == 0) {
          $items = $default;
        }

        // sdh pernah beli
        else {
          $q = $q->whereIn('id', $records)->findAll();
          // $items = array_merge($q, $default);
          foreach($q as $item) {
            foreach($default as $d) {
              if ($item['nama'] == $d['nama']) {
                unset($default[array_search($d, $default)]);
              }
            }
          }
          $items = array_merge($q, $default);
        }

        // dd($items);
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

    
    public function get_unrepaired_item() {
        return $this->where([
          'scene' => session()->get('kelompok')['scene'],
          'repaired' => 0,
        ])
        ->findAll();
    }
}
