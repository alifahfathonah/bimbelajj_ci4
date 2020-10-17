<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\PesertaModel;
use App\Models\ProgramModel;

class Registrasi extends BaseController
{
    public function index()
    {
        $tbKelas = new KelasModel();
        $tbProgram = new ProgramModel();
        $data = [
            'validasi' => $this->validasi,
            'dtKelas' => $tbKelas->findAll(),
            'dtProgram' => $tbProgram->findAll()
        ];
        return view('registrasi/formView', $data);
    }

    public function simpan()
    {
        $rules = [
            'nama' => 'alpha_space',
            'tgl_lahir' => 'valid_date',
            'nomor_hp' => 'numeric'
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('/registrasi/index')->withInput()->with('validasi', $this->validasi);
        }
        $peserta = new PesertaModel();
        $hasil = $this->request->getPost();
        $id = $peserta->insert($hasil);
        $this->session->set('newId', $id);

        return view('registrasi/suksesView');
    }

    public function dataku()
    {
        $newId = $this->session->get('newId');
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

        return view('layoutView', $data);

        return view('registrasi/suksesView', $data);
    }
}
