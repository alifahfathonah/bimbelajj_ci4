<?php

namespace App\Controllers\Admin;

//use App\Controllers\BaseController;

class Soal extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->tbMain = new \App\Models\SoalModel();
        $this->entiti = new \App\Entities\Soal();
        $this->baseurl = base_url('admin/soal') . '/';
        $this->folderView = 'admin/soal/';
    }
    public function index()
    {
        if ($this->session->has('pencarian')) {
            $cari = $this->session->get('pencarian');
            $tabel = $this->tbMain->cari($cari);
        } else {
            //$tb = new \App\Models\SoalBaruModel;
            $tabel = $this->tbMain->gabung();
        }
        $brcumb = ['admin', 'soal'];
        $data = [
            'judulWeb' => 'Data Soal',
            'judulPage' => 'Data Soal',
            'brcumb' => $brcumb,
            'dts'    => $tabel->paginate(3, 'group1'),
            'pager'   => $tabel->pager,
            'aktif' => 'soal',
            'validasi' => $this->validasi,
            'baseUrl' => $this->baseurl,
        ];
        $data = array_merge($data, $this->data);

        return view($this->folderView . 'indexV', $data);
    }

    public function cari()
    {
        $rules = ['cari' => 'required|alpha_numeric'];
        if (!$this->validate($rules)) {
            return redirect()->to('index')->withInput()->with('validasi', $this->validasi);
        }
        $cari = $this->request->getPost('cari');
        $this->session->set('pencarian', $cari);
        return redirect()->to('index');
    }

    public function reset_keyword()
    {
        $this->session->remove('pencarian');
        return redirect()->to('index');
    }


    public function detail($id)
    {
        $dtMain = $this->tbMain->find($id);
        $brcumb = ['admin', 'dashboard'];

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Detail Data Admin',
            'brcumb' => $brcumb,
            'dt'    => $dtMain,
            'aktif' => 'dataAdmin',
            'linkEdit' => $this->baseurl . '/edit',
            'linkCancel' => $this->baseurl,
        ];
        $data = array_merge($data, $this->data);

        return view($this->folderView . 'detailV', $data);
    }

    public function edit($id)
    {
        $tes = new \App\Libraries\Form_input;

        $dtMain = $this->tbMain->find($id);
        $brcumb = ['admin', 'dashboard'];

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Edit Data Admin',
            'brcumb' => $brcumb,
            'dt'    => $dtMain,
            'aktif' => 'dataAdmin',
            'validasi' => $this->validasi,
            'ff' => $tes,
            'proses' => 'admin/data_admin/edit_proses',
            'linkCancel' => $this->baseurl
        ];
        $data = array_merge($data, $this->data);
        return view($this->folderView . 'formV', $data);
    }

    public function edit_proses()
    {
        $hasil = $this->request->getPost();

        $this->validasi->run($hasil, 'admin');
        $errors = $this->validasi->getErrors();
        if ($errors) {
            dd($errors);
        } else {
            $admin = new \App\Entities\Admin();
            $admin->id = $hasil['id'];
            $admin->fill($hasil);

            $this->tbMain->save($admin);

            //$id = $this->tbMain->insertID();

            $segments = ['admin', 'data_admin', 'detail', $hasil['id']];
            // /barang/view/$id
            return redirect()->to(base_url($segments));
        }
    }

    public function tambah()
    {
        $tes = new \App\Libraries\Form_input;
        $brcumb = ['admin', 'dashboard'];

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Edit Data Admin',
            'brcumb' => $brcumb,
            'dt'    => '',
            'aktif' => 'dataAdmin',
            'validasi' => $this->validasi,
            'ff' => $tes,
            'proses' => 'admin/data_admin/tambah_proses'
        ];
        $data = array_merge($data, $this->data);
        return view($this->folderView . 'formAddV', $data);
    }

    public function tambah_proses()
    {

        $hasil = $this->request->getPost();
        $this->validasi->run($hasil, 'admin');
        $errors = $this->validasi->getErrors();
        if ($errors) {
            dd($errors);
        } else {
            $admin = new \App\Entities\Admin();

            $admin->fill($hasil);

            $this->tbMain->save($admin);

            $id = $this->tbMain->insertID();

            $segments = ['admin', 'data_admin', 'detail', $id];

            return redirect()->to(base_url($segments));
        }
    }

    public function hapus($id)
    {

        $this->tbMain->delete($id);

        return redirect()->to($this->baseurl);
    }
}
