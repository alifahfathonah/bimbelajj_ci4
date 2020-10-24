<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\SoalModel;
use App\Models\SoalDetailModel;
use CodeIgniter\Controller;

class Ujian extends Controller
{
    public function index()
    {
        $model = new SoalModel();
        $dt_soal = $model->find(1);
        $brcumb = ['admin', 'dashboard'];
        $data = [
            'avatar' => 'default.jpg',
            'judulWeb' => 'Registrasi',
            'judulPage' => 'Registrasi Sukses',
            'nama'  => 'saya',
            'program' => 'nama program',
            'dt'    => $dt_soal,
            'aktif' => 'Dashboard',
            'brcumb' => $brcumb,
            'linkEdit' => base_url('peserta/edit'),
            'linkDetail' => base_url('peserta/detail')
        ];


        return view('layoutUjianView', $data);
    }
}
