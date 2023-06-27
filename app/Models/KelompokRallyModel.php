<?php

namespace App\Models;

use CodeIgniter\Model;

class KelompokRallyModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kelompok_rally';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_kelompok', 'poin'];

    public function add_point($id, $poin) {
        return $this->set('poin', 'poin+' . $poin, FALSE)->where('id_kelompok', $id)->update();
    }
}