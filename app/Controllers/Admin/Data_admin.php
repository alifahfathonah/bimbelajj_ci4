<?php

namespace App\Controllers\Admin;

//use App\Controllers\BaseController;

class Data_admin extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->tbAdmin = new \App\Models\AdminModel();
    }
    public function index()
    {


        $dtAdmin = $this->tbAdmin->findAll();
        $brcumb = ['admin', 'dashboard'];

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Halaman Admin',
            'brcumb' => $brcumb,
            'dts'    => $dtAdmin,
            'aktif' => 'dataAdmin',
            'linkTambah' => base_url('admin/data_admin/tambah'),
            'linkDetail' => base_url('admin/data_admin/detail'),
            'linkEdit' => base_url('admin/data_admin/edit'),
            'linkHapus' => base_url('admin/data_admin/hapus'),
        ];
        $data = array_merge($data, $this->data);

        return view('admin/dataAdmin/indexV', $data);
    }

    public function detail($id)
    {

        $dtAdmin = $this->tbAdmin->find($id);
        $brcumb = ['admin', 'dashboard'];

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Detail Data Admin',
            'brcumb' => $brcumb,
            'dt'    => $dtAdmin,
            'aktif' => 'dataAdmin',
            'linkEdit' => base_url('admin/data_admin/edit'),
            'linkCancel' => base_url('admin/data_admin'),
        ];
        $data = array_merge($data, $this->data);

        return view('admin/dataAdmin/detailV', $data);
    }

    public function edit($id)
    {
        $tes = new \App\Libraries\Form_input;

        $dtAdmin = $this->tbAdmin->find($id);
        $brcumb = ['admin', 'dashboard'];

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Edit Data Admin',
            'brcumb' => $brcumb,
            'dt'    => $dtAdmin,
            'aktif' => 'dataAdmin',
            'validasi' => $this->validasi,
            'ff' => $tes,
            'proses' => 'admin/data_admin/edit_proses',
            'linkCancel' => base_url('admin/data_admin')
        ];
        $data = array_merge($data, $this->data);
        return view('admin/dataAdmin/formV', $data);
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

            $this->tbAdmin->save($admin);

            //$id = $this->tbAdmin->insertID();

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
        return view('admin/dataAdmin/formAddV', $data);
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

            $this->tbAdmin->save($admin);

            $id = $this->tbAdmin->insertID();

            $segments = ['admin', 'data_admin', 'detail', $id];
            // /barang/view/$id
            return redirect()->to(base_url($segments));
        }
    }

    public function hapus($id)
    {

        $this->tbAdmin->delete($id);

        return redirect()->to(base_url('admin/data_admin'));
    }
}
