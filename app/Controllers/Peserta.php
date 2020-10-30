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
        $nama_program = $program->find($saya->program_pilihan);
        $kelas = new KelasModel();
        $nama_kelas = $kelas->find($saya->kelas);

        $saya->nama_program = $nama_program['nama_program'];
        $saya->nama_kelas = $nama_kelas['nama_kelas'];
        $brcumb = ['admin', 'dashboard'];
        $data = [
            'judulWeb' => 'Registrasi',
            'judulPage' => 'Registrasi Sukses',
            'nama'  => $saya->nama,
            'program' => $nama_program['nama_program'],
            'dt'    => $saya,
            'aktif' => 'Dashboard',
            'brcumb' => $brcumb,
            'linkEdit' => base_url('peserta/edit'),
            'linkDetail' => base_url('peserta/detail')
        ];
        $data = array_merge($data, $this->data);


        return view('peserta/indexView', $data);
    }

    public function detail()
    {
        $newId = $this->session->get('id');
        $tb = new PesertaModel();
        $saya = $tb->join($newId);
        $brcumb = ['admin', 'dashboard'];
        $data = [
            'judulWeb' => 'Peserta',
            'judulPage' => 'Data Saya',
            'nama'  => $saya[0]->nama,
            'program' => $saya[0]->nama_program,
            'dt'    => $saya[0],
            'aktif' => 'Dashboard',
            'brcumb' => $brcumb,
            'linkUpload' => base_url('peserta/upload'),
            'linkCancel' => base_url('peserta/index'),
            'linkEdit' => base_url('peserta/edit')
        ];
        $data = array_merge($data, $this->data);


        return view('peserta/detailV', $data);
    }

    public function edit()
    {
        $tes = new \App\Libraries\Form_input;
        $tb = new PesertaModel();
        $dt = $tb->join($this->session->get('id'));
        $brcumb = ['admin', 'dashboard'];
        $data = [
            'judulWeb' => 'Admin',
            'judulPage' => 'Edit Data Saya',
            'brcumb' => $brcumb,
            'dt'    => $dt[0],
            'aktif' => 'dashboard',
            'validasi' => $this->validasi,
            'ff' => $tes,
            'proses' => 'peserta/edit_proses',
            'linkCancel' => base_url('peserta')
        ];
        $data = array_merge($data, $this->data);
        return view('peserta/formV', $data);
    }

    public function edit_proses()
    {
        $hasil = $this->request->getPost();

        $this->validasi->run($hasil, 'peserta');
        $errors = $this->validasi->getErrors();
        if ($errors) {
            return redirect()->to('edit')->withInput();
        } else {


            //$id = $this->tbAdmin->insertID();

            // /barang/view/$id
            return redirect()->to(base_url('peserta'));
        }
    }
    public function upload()
    {
        $newId = $this->session->get('id');
        $tb = new PesertaModel();
        $saya = $tb->find($newId);

        $this->data = [
            'dt' => $saya,
            'linkBack' => base_url('peserta/detail'),
            'linkUpload' => base_url('peserta/upload_proses')
        ];
        return view('peserta/cropperV', $this->data);
    }

    public function upload_proses()
    {
        $folderPath = 'img/foto_profil/';

        $image_parts = explode(";base64,", $_POST['image']);
        $image_type_aux = explode("image/", $image_parts[0]);
        //$image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $namaFile = uniqid() . '.png';
        $file = $folderPath . $namaFile;
        file_put_contents($file, $image_base64);
        $dtin = [
            'foto' => $namaFile
        ];
        $entiti = new \App\Entities\Peserta();
        $entiti->id = $this->session->get('id');
        $entiti->fill($dtin);
        $tb = new PesertaModel();
        $tb->save($entiti);
        return $file;
    }
}
