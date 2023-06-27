<?php

namespace App\Controllers;

use App\Models\LoginModel;

$session = \Config\Services::session();

class Home extends BaseController
{
    public function index()
    {
        return view('gurun');
    }

    // public function admin()
    // {
    //     return view('admin');
    // }
}
