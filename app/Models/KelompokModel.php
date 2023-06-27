<?php

namespace App\Models;

use CodeIgniter\Model;

class KelompokModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kelompok';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'ruangan', 'created_at', 'updated_at', 'deleted_at'];
    
    /**
      * Fungsi untuk mendapatkan id kelompok
      *
      * @param string $name
      * @return App\Models\KelompokModel
      */
    public function get_id($name) {
        return $this->select('id')->where('nama', $name)->get()->getResult();
    }
}
