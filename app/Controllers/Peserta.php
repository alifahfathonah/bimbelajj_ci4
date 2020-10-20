<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\PesertaModel;
use App\Models\ProgramModel;

class Peserta extends BaseController
{
    public function index()
    {
        $newId = $this->session->get('id');
        $peserta = new PesertaModel();
        $saya = $peserta->find($newId);
        $program = new ProgramModel();
        $nama_program = $program->find($saya['program_pilihan']);
        $kelas = new KelasModel();
        $nama_kelas = $kelas->find($saya['kelas']);

        $saya['nama_program'] = $nama_program['nama_program'];
        $saya['nama_kelas'] = $nama_kelas['nama_kelas'];

        $data = [
            'judulWeb' => 'Registrasi',
            'judulPage' => 'Registrasi Sukses',
            'nama'  => $saya['nama'],
            'program' => $nama_program['nama_program'],
            'dt'    => $saya
        ];


        return view('peserta/indexView', $data);
    }
}
