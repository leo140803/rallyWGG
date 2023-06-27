<?php

namespace App\Controllers;

use App\Models\ItemModel;
use App\Models\VariantModel;
use App\Models\KelompokModel;
use App\Models\PembelianModel;
use App\Models\KelompokRallyModel;
use App\Controllers\BaseController;
use CodeIgniter\Database\Exceptions\DatabaseException;

class Rally extends BaseController
{
    protected $kelompokRally;
    protected $kelompok;
    protected $item;
    protected $variant;
    protected $pembelian;
    protected $db;

    public function __construct() {
        $this->kelompokRally = new KelompokRallyModel();
        $this->kelompok = new KelompokModel();
        $this->item = new ItemModel();
        $this->variant = new VariantModel();
        $this->pembelian = new PembelianModel();
        $this->db = \Config\Database::connect();
    }

    /**
     * Halaman utama mahasiswa
     * 
     * @return CodeIgniter\HTTP\Message
    */
    public function index() {
        session()->set('kelompok', $this->kelompokRally->find(3));
        return view('gurun');
    }

    /**
     * Halaman admin buat update poin
     * 
     * @return CodeIgniter\HTTP\Message
    */
    public function add_point() {
        $validation = (session()->get('validation') ?? \Config\Services::validation());
        return view('admin', [
            'kelompok' => $this->kelompok->findColumn('nama'),
            'validation' => $validation,
        ]);
    }

    /**
     * Fungsi update poin kelompok
     * 
     * @return CodeIgniter\HTTP\Message
    */
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

    /**
     * Fungsi untuk membeli barang
     * 
     * @return array
    */
    public function buy() {
        $variant_id = $this->request->getVar('variant_id');
        $toBuy = $this->item->get_item($variant_id);
        $item_name = $toBuy['nama'];
        $result = [
            [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => 'Gagal membeli barang ' . $item_name .', silahkan coba lagi'
            ],
            [
                'icon' => 'success',
                'title' => 'Sukses!',
                'text' => 'Berhasil membeli ' . $item_name
            ],
            [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => 'Poin mu tidak cukup untuk membeli ' . $item_name 
            ],
            [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => 'Barang sudah dibeli!'
            ],
        ];

        // cek kembar
        if ($this->pembelian->cek_kembar(session()->get('kelompok')['id_kelompok'], $variant_id)) {
            dd("kembar");
            return $result[3];
        }

        // cek barang
        if ($toBuy && $toBuy['repaired'] == 1) {
            // cek scene
            if (intval($toBuy['scene']) != intval(session()->get('kelompok')['scene'])) {
                return json_encode($result[0], $this->kelompokRally->get_coin(session()->get('kelompok')['id_kelompok']));
            }

            // cek poin
            if ($this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok'])->poin >= intval($toBuy['harga'])) {
                try {
                    $this->db->transException(true)->transStart();

                    $this->kelompokRally->add_point(session()->get('kelompok')['id_kelompok'], -intval($toBuy['harga']));
                    $this->pembelian->insert([
                        'id_kelompok' => session()->get('kelompok')['id_kelompok'],
                        'id_variant' => $variant_id,
                    ]);

                    $this->db->transComplete();
                } 
                catch (DatabaseException $e) {
                    return json_encode($result[0]);
                }

                return json_encode($result[1]);
            }
            return json_encode($result[2]);
        }
        return json_encode($result[0]);
    }
}