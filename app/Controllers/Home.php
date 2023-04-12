<?php

namespace App\Controllers;

use App\Models\LoginModel;

$session = \Config\Services::session();

class Home extends BaseController
{
    private $model;

    public function __construct()
    {
        $session = session();
        $this->model = new LoginModel();
    }
    public function index()
    {
        return view('login');
    }

    public function cekLogin()
    {
        $x = $this->model->login($_POST["inputLogin"], $_POST["inputPassword"]);
        echo $x;
        if ($x == 1) {
            $_SESSION['user'] = $_POST['inputLogin'];
            return redirect()->to(site_url("home"))->withInput()->with('msg_success', $_POST["inputLogin"]);
            // site_url("home");
        } else if ($x == 0) {
            return redirect()->to(site_url("/"))->withInput()->with('msg_error', 'Tidak berhasil masuk');
        }
    }

    public function home()
    {

        return view('home');
    }

    public function crew()
    {
        $data['data_crew'] = $this->model->tampilkan_data();
        return view('crew', $data);
    }

    public function tambah()
    {
        $hasil = $this->model->cekUserName($_POST['inputUsername']);
        if ($hasil == 1) {
            return redirect()->to(site_url('crew'))->with('error_val', 'Username sudah dipakai');
        } else {

            $tambahdata = $this->model->tambah_data([
                'username' => $this->request->getVar('inputUsername'),
                'password' => $this->request->getVar('inputPassword'),
                'nama' => $this->request->getVar('inputNama'),
                'email' => $this->request->getVar('inputEmail'),
                'telpon' => $this->request->getVar('inputTelpon')

            ]);
            if ($this->model->db->affectedRows() > 0) {
                return redirect()->to(site_url('crew'))->with('add_success', 'Berhasil');
            }
        }
    }

    public function delete($username)
    {
        $deleteData = $this->model->delete_data($username);
        if ($deleteData) {
            return redirect()->to(site_url('crew'))->with('success', 'Berhasil');
        }
    }

    public function edit()
    {
        $data = [
            'username' => $_GET['editUsername'],
            'nama' => $_GET['editNama'],
            'email' => $_GET['editEmail'],
            'telpon' => $_GET['editTelpon']
        ];

        $result = $this->model->update_data($data);
        if ($result) {
            return redirect()->to(site_url('crew'))->with('edit_success', 'Berhasil');
        }
    }

    public function logout()
    {
        $_SESSION['user'] = null;
        session_destroy();
        return redirect()->to(site_url('/'));
    }
}
