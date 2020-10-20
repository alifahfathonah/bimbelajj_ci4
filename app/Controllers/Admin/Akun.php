<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
//===== ADMIN ========= 
class Akun extends BaseController
{
    public function index()
    {
        $data = [
            'bgImage' => base_url() . '/template/assets/images/bg-2.jpg',
            'bgLogo' => base_url() . '/template/assets/images/logo.png',
            'keterangan' => 'Selamat Datang! Anda adalah admin, silahkan login',
            'proses' => 'admin/akun/login_procs',
            'validasi' => $this->validasi,
            'pesanError' => $this->session->getFlashdata('pesanError')
        ];
        return view('admin/loginV', $data);
    }

    public function login_procs() //form login
    {
        $pesanError = '';
        if ($this->validasi->run($this->request->getPost(), 'login')) {
            $hasilPost = $this->request->getPost();
            $username = $hasilPost['username'];
            $password = $hasilPost['password'];

            $tbAdmin = new \App\Models\AdminModel;
            $row = $tbAdmin->where('username', $username)->first();
            if ($row) {
                if ($row['password'] == $password) {
                    $sessData = [
                        'id' => $row['id'],
                        'isLoggedIn' => TRUE,
                        'isAdmin' => TRUE,
                        'userLevel' => $row['user_level']
                    ];
                    $this->session->set($sessData);

                    return redirect()->to(base_url('admin/dashboard'));
                } else {
                    $pesanError = "Password Salah!";
                    $this->session->setFlashdata('flasherror', $pesanError);
                }
            } else {
                $pesanError = "Username tersebut belum terdaftar!";
                $this->session->setFlashdata('flasherror', $pesanError);
            }
        }
        return redirect()->to('index')->withInput()->with('pesanError', $pesanError);
    }
}
