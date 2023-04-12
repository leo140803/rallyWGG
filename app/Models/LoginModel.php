<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'account';
    protected $primaryKey       = 'username';
    protected $returnType       = 'object';
    protected $allowedFields    = ['username', 'password', 'nama', 'email', 'telpon'];

    public function login($username, $password)
    {
        $user = $this->like('username', $username, 'none')->first();
        if ($user == true) {
            $temp = $this->like('username', $username, 'none')->first();
            $temp = $temp->password;
            if ($password == $temp) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        };
    }

    public function update_data($data)
    {
        return $this
            ->set([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'telpon' => $data['telpon']
            ])
            ->where('username', $data['username'])
            ->update();
    }

    public function cekUserName($username)
    {
        $this->like('username', $username, 'none');
        return $this->countAllResults();
    }

    public function tampilkan_data()
    {
        return $this
            ->db
            ->table($this->table)
            ->get()
            ->getResult();
    }

    public function tambah_data($data)
    {
        return $this->insert($data);
    }

    public function delete_data($username)
    {
        return $this->where('username', $username)->delete();
    }
}
