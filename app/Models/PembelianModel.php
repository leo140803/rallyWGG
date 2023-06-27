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
    protected $allowedFields    = ['id_kelompok', 'id_variant'];

    /**
      * Fungsi untuk mendapatkan poin kelompok
      *
      * @return boolean
      */
    public function cek_kembar($id_kelompok, $id_variant) {
        $q = $this->where('id_kelompok', $id_kelompok)->where('id_variant', $id_variant)->get();

        if ($id_variant == 40)
            return $q->getNumRows() > 2;
        
        return $q->getNumRows() > 0;
    }
}
