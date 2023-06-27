<?php

namespace App\Models;

use CodeIgniter\Model;

class VariantModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'item_variants';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [];
}
