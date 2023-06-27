<?php

namespace App\Controllers;

use App\Models\KelompokModel;
use App\Models\KelompokRallyModel;
use App\Controllers\BaseController;

class Rally extends BaseController
{
    protected $kelompokRally;
    protected $kelompok;

    public function __construct() {
        $this->kelompokRally = new KelompokRallyModel();
        $this->kelompok = new KelompokModel();
    }

    public function index()
    {
        return view('gurun');
    }

    public function add_point()
    {
        $validation = (session()->get('validation') ?? \Config\Services::validation());
        return view('admin', [
            'kelompok' => $this->kelompok->get_name(),
            'validation' => $validation,
        ]);
    }

    public function update_point() {
        $validasi = [
            'input-kelompok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kelompok harus diisi',      
                ]
            ],
            'input-poin' => [
                'rules' => 'required|greater_than[0]',
                'errors' => [
                    'required' => 'Tambahan poin harus diisi',
                    'greater_than' => 'Tambahan poin harus lebih besar dari 0',
                ]
            ],
        ];

        if (!$this->validate($validasi)) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $id_kel = $this->kelompok->get_id($this->request->getVar('input-kelompok'));

        if ($id_kel) {
            $this->kelompokRally->add_point($id_kel[0]->id, $this->request->getVar('input-poin'));
            if ($this->kelompokRally->affectedRows() > 0) {
                return redirect()->back()->with('success', 'Poin kelompok ' . $this->request->getVar('input-kelompok') . ' berhasil ditambahkan');
            }
        }

        return redirect()->back()->with('error', 'Kelompok ' . $this->request->getVar('input-kelompok') . ' tidak ditemukan');
    }
}
