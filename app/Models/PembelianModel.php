<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pembelian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_kelompok', 'id_item'];

    /**
      * Fungsi untuk mendapatkan poin kelompok
      *
      * @return boolean
      */
    public function cek_kembar($id_kelompok, $id_item) {
        $q = $this->where('id_kelompok', $id_kelompok)->where('id_item', $id_item)->get();

        // if ($id_item == 40)
        //     return $q->getNumRows() > 2;
        
        return $q->getNumRows() > 0;
    }

    public function get_records() {
        return $this->select('id_item')->where('id_kelompok', session()->get('kelompok')['id_kelompok'])->findAll();
    }
}
