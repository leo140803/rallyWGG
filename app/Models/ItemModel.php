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
    protected $allowedFields    = ['nama', 'scene', 'harga'];

    /**
      * Fungsi untuk mendapatkan item dari variant tertentu
      *
      * @param int $id_variant
      * @return App\Models\ItemModel
      */
    public function get_item($id_variant) {
        return $this->join('item_variants', 'item_variants.id_item = item.id')
        ->where('item_variants.id', $id_variant)
        ->get()
        ->getResultArray()[0];
    }
}
