<?php

namespace App\Models;

use CodeIgniter\Model;

class model extends Model
{
    protected $table            = 'account';
    protected $primaryKey       = 'username';
    protected $returnType       = 'object';
    protected $allowedFields    = ['username', 'password'];

    public function login($username)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->like('username', $username);
        return $this->db->count_all_results();
    }
    // public function tampilkan_data()
    // {
    //     // query builder
    //     return $this
    //         ->db
    //         ->table($this->table)
    //         ->orderBy('NRP')
    //         ->get()
    //         ->getResult();
    // }

    // public function tambah_data($data)
    // {
    //     return $this->insert($data);
    // }

    // public function fetch_data($nrp)
    // {
    //     return $this
    //         ->where('NRP', $nrp)
    //         ->first();
    // }

    // public function update_data($data)
    // {
    //     return $this
    //         ->set([
    //             'Nama' => $data['nama'],
    //             'Nilai' => $data['nilai']
    //         ])
    //         ->where('NRP', $data['nrp'])
    //         ->update();
    // }

    // public function delete_data($nrp)
    // {
    //     return $this->where('NRP', $nrp)->delete();
    // }
}
