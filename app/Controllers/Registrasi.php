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
            'username' => 'required|alpha_numeric',
            'tgl_lahir' => 'valid_date',
            'nomor_hp' => 'numeric'
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('/registrasi/index')->withInput()->with('validasi', $this->validasi);
        }
        $peserta = new PesertaModel();
        $hasil = $this->request->getPost();
        $hasil['password'] = '123';
        $peserta->insert($hasil);

        return redirect()->to('/registrasi/login')->with('username', $hasil['username']);
    }


    public function login()
    {
        $data = [
            'validasi' => $this->validasi,
            'pesanError' => $this->session->getFlashdata('pesanError')
        ];
        return view('registrasi/loginView', $data);
    }

    public function login_procs()
    {
        $rules = [
            'username' => 'required|alpha_numeric',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/registrasi/login')->withInput()->with('validasi', $this->validasi);
        }
        $peserta = new PesertaModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $peserta->where('username', $username)->first();

        if ($row) {
            if ($row['password'] == $password) {
                $sessData = [
                    'id' => $peserta->id,
                    'isLoggedIn' => TRUE
                ];

                $this->session->set($sessData);
                return redirect()->to('/registrasi/dataku');
            }
            $pesanError = 'Password yang anda masukkan salah!';
            return redirect()->to('/registrasi/login')->withInput()->with('pesanError', $pesanError);
        }
        $pesanError = 'Username tidak ditemukan!';
        return redirect()->to('/registrasi/login')->withInput()->with('pesanError', $pesanError);



        //if($hasil==$)
        //$this->session->set('newId', $id);

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

    public function send_email($subject, $isi)
    {
        $email = \Config\Services::email();

        $email->setFrom('csbimbelajj@gmail.com', 'Customer Services');
        $email->setTo('nafisbillah@gmail.com');
        //$email->setCC('another@another-example.com');
        //$email->setBCC('them@their-example.com');

        $email->setSubject($subject);
        $email->setMessage($isi);

        if ($email->send()) {
            return true;
        } else {
            return false;
        }
    }
}
