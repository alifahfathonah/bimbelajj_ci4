<?php

namespace App\Controllers\Admin;

//use App\Controllers\BaseController;

class Data_peserta extends \App\Controllers\BaseController
{
    public function __construct()
    {
        $this->mainTable = new \App\Models\PesertaModel();
        $this->brcumb = ['admin', 'Data Peserta'];
    }
    public function index()
    {
        $xx = $this->mainTable->join();
        //$xx = $this->mainTable->join(1);
        //dd($xx);
        //$dts = $this->mainTable->findAll();
        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Data Peserta',
            'judulTable' => 'Data Peserta',
            'brcumb' => $this->brcumb,
            'dts'    => $xx,
            'aktif' => 'dataPeserta',
            'linkTambah' => base_url('admin/data_peserta/tambah'),
            'linkDetail' => base_url('admin/data_peserta/detail'),
            'linkEdit' => base_url('admin/data_peserta/edit'),
            'linkHapus' => base_url('admin/data_peserta/hapus'),
        ];
        $data = array_merge($data, $this->data);

        return view('admin/dataPeserta/indexV', $data);
    }

    public function detail($id)
    {
        //$dts = $this->mainTable->find($id);
        $dts = $this->mainTable->join($id);

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Detail Data Peserta',
            'brcumb' => $this->brcumb,
            'dt'    => $dts[0],
            'aktif' => 'dataPeserta',
            'linkEdit' => base_url('admin/data_peserta/edit'),
            'linkCancel' => base_url('admin/data_peserta'),
        ];
        $data = array_merge($data, $this->data);

        return view('admin/dataPeserta/detailV', $data);
    }

    public function edit($id)
    {
        $tes = new \App\Libraries\Form_input;

        $dts = $this->mainTable->find($id);

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Edit Data Admin',
            'brcumb' => $this->brcumb,
            'dt'    => $dts,
            'aktif' => 'dataPeserta',
            'validasi' => $this->validasi,
            'ff' => $tes,
            'proses' => 'admin/data_peserta/edit_proses',
            'linkCancel' => base_url('admin/data_peserta')
        ];
        $data = array_merge($data, $this->data);
        return view('admin/dataPeserta/formV', $data);
    }

    public function edit_proses()
    {
        $hasil = $this->request->getPost();

        $this->validasi->run($hasil, 'peserta');
        $errors = $this->validasi->getErrors();
        if ($errors) {
            return redirect()->to('edit/' . $hasil['id'])->withInput();
        } else {
            $entiti = new \App\Entities\Peserta();
            $entiti->id = $hasil['id'];
            $entiti->fill($hasil);

            $this->mainTable->save($entiti);

            //$id = $this->mainTable->insertID();

            $segments = ['admin', 'data_peserta', 'detail', $hasil['id']];
            // /barang/view/$id
            return redirect()->to(base_url($segments));
        }
    }

    public function tambah()
    {
        $ff = new \App\Libraries\Form_input;

        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Edit Data Admin',
            'brcumb' => $this->brcumb,
            'dt'    => '',
            'aktif' => 'dataPeserta',
            'validasi' => $this->validasi,
            'ff' => $ff,
            'proses' => 'admin/data_peserta/tambah_proses'
        ];
        $data = array_merge($data, $this->data);
        return view('admin/dataPeserta/formAddV', $data);
    }

    public function tambah_proses()
    {

        $hasil = $this->request->getPost();
        $this->validasi->run($hasil, 'peserta');
        $errors = $this->validasi->getErrors();
        if ($errors) {
            dd($errors);
        } else {
            $entiti = new \App\Entities\Peserta();

            $entiti->fill($hasil);

            $this->mainTable->save($entiti);

            $id = $this->mainTable->insertID();

            $segments = ['admin', 'data_peserta', 'detail', $id];
            // /barang/view/$id
            return redirect()->to(base_url($segments));
        }
    }

    public function hapus($id)
    {

        $this->mainTable->delete($id);

        return redirect()->to(base_url('admin/data_peserta'));
    }
}
