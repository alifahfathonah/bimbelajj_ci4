<?php

namespace App\Controllers\Admin;

//use App\Controllers\BaseController;


class Dashboard extends \App\Controllers\BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        $dtuser = $this->_set_data_user();

        $brcumb = ['admin', 'dashboard'];
        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Halaman Admin',
            'brcumb' => $brcumb,
            'dt'    => $dtuser,
            'aktif' => 'dashboard'
        ];
        $data = array_merge($data, $this->data);

        return view('admin/dashboardV', $data);
    }
}
