<?php

namespace App\Controllers;

use App\Models\ItemModel;
use App\Models\ItemImgModel;
use App\Models\KelompokModel;
use App\Models\PembelianModel;
use App\Models\KelompokRallyModel;
use App\Controllers\BaseController;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\I18n\Time;

class Rally extends BaseController
{
    protected $kelompokRally;
    protected $kelompok;
    protected $item;
    protected $pembelian;
    protected $itemImg;
    protected $db;

    public function __construct()
    {
        $this->kelompokRally = new KelompokRallyModel();
        $this->kelompok = new KelompokModel();
        $this->item = new ItemModel();
        $this->pembelian = new PembelianModel();
        $this->itemImg = new ItemImgModel();
        $this->db = \Config\Database::connect();
    }

    /**
     * Halaman utama mahasiswa
     * 
     * @return CodeIgniter\HTTP\Message
     */
    public function index()
    {
        session()->set('kelompok', $this->kelompokRally->find(2));
        $tmp = $this->pembelian->get_records();
        $records = [];
        foreach($tmp as $t)
            $records[] = $t['id_item'];

        $data = [
            'shop' => $this->item->get_shop_item($records),
            'display' => $this->item->get_display_item($records),
            'coin' => $this->kelompokRally->get_poin(session()->get('kelompok')['id'])
        ];

        if (session()->get('kelompok')['scene'] == 1) {
            return view('gurun', $data);
        }
        else if (session()->get('kelompok')['scene'] == 2) {
            return view('economic', $data);
        }
    }

    public function eco()
    {
        session()->set('kelompok', $this->kelompokRally->find(3));
        return view('economic');
    }

    /**
     * Halaman admin buat update poin
     * 
     * @return CodeIgniter\HTTP\Message
     */
    public function add_point()
    {
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
    public function update_point()
    {
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
    public function buy()
    {
        $item_id = $this->request->getVar('item_id');
        $toBuy = $this->item->find($item_id);

        $alerts = [
            [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => 'Gagal membeli barang ' . $toBuy['nama'] . ', silahkan coba lagi'
            ],
            [
                'icon' => 'success',
                'title' => 'Sukses!',
                'text' => 'Berhasil membeli ' . $toBuy['nama']
            ],
            [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => 'Poin mu tidak cukup untuk membeli ' . $toBuy['nama']
            ],
            [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => 'Barang sudah dibeli!'
            ],
        ];

        // cek pembelian kembar
        if ($this->pembelian->cek_kembar(session()->get('kelompok')['id_kelompok'], $item_id)) {
            // sudah pernah dibeli
            return json_encode([
                'response' => $alerts[3],
                'item' => null,
                'coin' => $this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok']),
            ]);
        }

        // cek barang
        if ($toBuy && $toBuy['repaired'] == 1) {
            $items = $this->item->get_item([$item_id]);

            // cek scene
            if (intval($toBuy['scene']) != intval(session()->get('kelompok')['scene'])) {
                return json_encode([
                    'response' => $alerts[0],
                    'item' => null,
                    'coin' => $this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok']),
                ]);
            }

            // cek poin
            if ($this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok'])->poin >= intval($toBuy['harga'])) {
                // beli 5 barang, Tuhan berikan langit baru
                if (count($this->pembelian->get_records()) == 4 && session()->get('kelompok')['scene'] == 1) {
                    $items[] = $this->item->get_item([6])[0];
                }

                // beli bukit bonus tanah bosqu
                if ($item_id == 11) {
                    $items[] = $this->item->get_item([8])[0];
                }

                // return json_encode($items);
                foreach($items as $i)
                    $insert_id[] = $i['id_item'];

                $insert_id = array_unique($insert_id);

                try {
                    $this->db->transException(true)->transStart();

                    $this->kelompokRally->add_point(session()->get('kelompok')['id_kelompok'], -intval($toBuy['harga']));

                    foreach($insert_id as $i) {
                        $this->pembelian->insert([
                            'id_kelompok' => session()->get('kelompok')['id_kelompok'],
                            'id_item' => $i,
                            'created_at' => Time::now(),
                            'updated_at' => Time::now(),
                        ]);
                    }

                    $this->db->transComplete();
                } catch (DatabaseException $e) {
                    // dd($e);
                    // gagal insert
                    return json_encode([
                        'response' => $alerts[0],
                        'item' => null,
                        'coin' => $this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok']),
                    ]);
                }

                // sukses insert
                return json_encode([
                    'response' => $alerts[1],
                    'item' => $items,
                    'coin' => $this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok']),
                ]);
            }

            // poin ga cukup
            return json_encode([
                'response' => $alerts[2],
                'item' => null,
                'coin' => $this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok']),
            ]);
        }

        // barang invalid
        return json_encode([
            'response' => $alerts[0],
            'item' => null,
            'coin' => $this->kelompokRally->get_poin(session()->get('kelompok')['id_kelompok']),
        ]);
    }
}