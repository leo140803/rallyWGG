<?php

namespace App\Models;

use CodeIgniter\Model;

class CrewModel extends Model
{
    protected $table            = 'account';
    protected $primaryKey       = 'username';
    protected $returnType       = 'object';
    protected $allowedFields    = ['username', 'password', 'nama', 'email', 'telpon'];

    public function tampilkan_data()
    {
        return $this
            ->db
            ->table($this->table)
            ->get()
            ->getResult();
    }
}
