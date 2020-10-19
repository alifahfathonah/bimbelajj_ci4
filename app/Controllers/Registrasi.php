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
        $html = '<h1>Data Calon Peserta Baru</h1>';
        $html .= '<ul>';
        $html .= '<li>Nama ' . $hasil['nama'] . '</li>';
        $html .= '<li>Username ' . $hasil['username'] . '</li>';
        $html .= '<li>Password ' . $hasil['password'] . '</li>';
        $html .= '<li>No HP ' . $hasil['nomor_hp'] . '</li>';
        $html .= '</ul>';

        $this->_send_email('Peserta baru ' . $hasil['username'], $html);
        return redirect()->to('/registrasi/login')->with('username', $hasil['username']);
    }


    public function login()
    {
        $data = [
            'bgImage' => '/template/assets/images/bg-2.jpg',
            'bgLogo' => '/template/assets/images/logo.png',
            'keterangan' => 'Selamat Datang! silahkan login',
            'proses' => 'registrasi/login_procs',
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
                    'id' => $row['id'],
                    'isLoggedIn' => TRUE
                ];

                $this->session->set($sessData);
                return redirect()->to('/peserta');
            }
            $pesanError = 'Password yang anda masukkan salah!';
            return redirect()->to('/registrasi/login')->withInput()->with('pesanError', $pesanError);
        }
        $pesanError = 'Username tidak ditemukan!';
        return redirect()->to('/registrasi/login')->withInput()->with('pesanError', $pesanError);
    }

    public function admin_login()
    {
        $data = [
            'bgImage' => '',
            'proses' => 'registrasi/admin_login_procs',
            'validasi' => $this->validasi,
            'pesanError' => $this->session->getFlashdata('pesanError')
        ];
        return view('registrasi/loginView', $data);
    }

    public function admin_login_procs()
    {
        $rules = [
            'username' => 'required|alpha_numeric',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/registrasi/login')->withInput()->with('validasi', $this->validasi);
        }
        $admin = new \App\Models\AdminModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $admin->where('username', $username)->first();

        if ($row) {
            if ($row['password'] == $password) {
                $sessData = [
                    'id' => $row['id'],
                    'isLoggedIn' => TRUE,
                    'isAdmin' => TRUE
                ];

                $this->session->set($sessData);
                return redirect()->to('/admin');
            }
            $pesanError = 'Password yang anda masukkan salah!';
            return redirect()->to('/registrasi/admin_login')->withInput()->with('pesanError', $pesanError);
        }
        $pesanError = 'Username tidak ditemukan!';
        return redirect()->to('/registrasi/admin_login')->withInput()->with('pesanError', $pesanError);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/registrasi/login');
    }


    protected function _send_email($subject, $isi)
    {
        $email = \Config\Services::email();

        $email->setFrom('csbimbelajj@gmail.com', 'Customer Services');
        $email->setTo('mundinkcoy@gmail.com');
        //$email->setCC('bimbelajj@gmail.com');
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
