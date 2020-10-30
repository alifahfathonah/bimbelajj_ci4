<?php

namespace App\Controllers;

use App\Entities\SoalDetail;
use App\Models\PesertaModel;
use App\Models\SoalModel;
use App\Models\SoalDetailModel;
use App\Models\UjianModel;

class Ujian extends BaseController
{

    public function __construct()
    {
    }
    public function index()
    {
        $id_peserta = $this->session->get('id');
        $id_soal = $this->session->get('id_soal');
        $model = new UjianModel();
        $row = $model->cari(['id_siswa' => $id_peserta, 'id_soal' => $id_soal]);
        if (!$row) {
            return redirect()->to('ujian/persiapan');
        }
        $soalModel = new SoalModel();
        $dtsoal = $soalModel->find($id_soal);

        $detailModel = new SoalDetailModel();
        $detail = $detailModel->cari(['id_soal' => $id_soal]);
        $jml_soal = count($detail);
        $list_soal = json_decode($row[0]->list_soal);
        $brcumb = ['peserta', 'ujian'];
        $data = [
            'judulWeb' => 'Ujian',
            'judulPage' => 'Try Out',
            'id_peserta' => $id_peserta,
            'dt_soal' => $dtsoal,
            'jml_soal' => $jml_soal,
            'dt'    => $row[0],
            'list_soal' => $list_soal,
            'aktif' => 'Ujian',
            'brcumb' => $brcumb,
            'ajax_getData' => base_url('ujian/get_data'),
            'linkEdit' => base_url('peserta/edit'),
            'linkDetail' => base_url('peserta/detail')
        ];
        $data = array_merge($data, $this->data);
        return view('peserta/ujianV', $data);
    }

    public function get_data()
    {
        $id = $this->request->getPost('id');
        $detailModel = new SoalDetailModel();
        $detail = $detailModel->find($id);

        $arr = json_encode($detail);
        //$arr = (json_decode(json_encode($detail), true));
        return $arr;
    }

    public function selesai()
    {
        $post = $this->request->getPost();
        $arr = json_decode($post['jawaban'], 1);

        $id_soal = $this->session->get('id_soal');

        $detailModel = new SoalDetailModel();
        $detail = $detailModel->cari(['id_soal' => $id_soal]);

        $arrlist = array();
        foreach ($detail as $dt) {
            $arrlist[$dt->id] = $dt->kunci;
        }

        //membandingkan ambil yang sama
        $result = array_intersect_assoc($arrlist, $arr);

        //jumlah benar
        $jml_benar = count($result);
        $jml_soal = count($arrlist);
        $nilai = round($jml_benar * 100 / $jml_soal, 2);
        $brcumb = ['peserta', 'ujian'];
        $data = [
            'judulWeb' => 'Ujian',
            'judulPage' => 'Try Out',
            'aktif' => 'Ujian',
            'brcumb' => $brcumb,
            'jml_soal' => $jml_soal,
            'jml_benar' => $jml_benar,
            'nilai' => $nilai
        ];
        $data = array_merge($data, $this->data);
        return view('peserta/hasilUjianV', $data);
    }

    public function persiapan()
    {
        $id_peserta = $this->session->get('id');
        $id_soal = $this->session->get('id_soal');
        date_default_timezone_set("Asia/Jakarta");
        $mulai = date("Y-m-d H:i:s");

        $soalModel = new SoalModel();
        $dt_soal = $soalModel->find($id_soal);
        $waktu = $dt_soal->waktu;
        $str = '+' . $waktu . ' minutes';
        $selesai = date("Y-m-d H:i:s", strtotime($str, strtotime($mulai)));
        $detailModel = new SoalDetailModel();
        $detail = $detailModel->cari(['id_soal' => $id_soal]);
        foreach ($detail as $row) {
            $list_soal[] = $row->id;
        }

        shuffle($list_soal);
        $json_list_soal = json_encode($list_soal);



        $dtin = [
            'id_siswa' => $id_peserta,
            'id_soal' => $id_soal,
            'list_soal' => $json_list_soal,
            'list_jwb' => '',
            'mulai' => $mulai,
            'selesai' => $selesai,
            'status' => 0,
            'nilai' => 0
        ];
        //dd($dtin);
        $entiti = new \App\Entities\Ujian();
        //$admin->id = $hasil['id'];
        $entiti->fill($dtin);
        $ujianModel = new UjianModel();
        $ujianModel->save($entiti);
        return redirect()->to('ujian/index');
    }

    public function mulai()
    {
        $id_peserta = $this->session->get('id');
        $id_soal = $this->session->get('id_soal');
        $soalModel = new SoalModel();
        $dtsoal = $soalModel->find($id_soal);

        $str = $id_peserta . '_' . $id_soal . '.json';
        $strJsonFileContents = file_get_contents($str);
        // Convert to array 
        $array = json_decode($strJsonFileContents, true);
        $detail = $array['detail'];
        $jml_soal = count($detail);

        $brcumb = ['peserta', 'ujian'];
        $data = [
            'judulWeb' => 'Ujian',
            'judulPage' => 'Try Out',
            'dt_soal' => $dtsoal,
            'jml_soal' => $jml_soal,
            'dt'    => $array,
            'aktif' => 'Ujian',
            'brcumb' => $brcumb,
            'linkEdit' => base_url('peserta/edit'),
            'linkDetail' => base_url('peserta/detail')
        ];
        $data = array_merge($data, $this->data);
        return view('peserta/ujianV', $data);
    }

    public function tulis()

    {
        $arr = [
            [
                'id_detail' => '1',
                'pertanyaan' => 'ini adalah pertanyaan',
                'kunci' => 'a',
                'jawaban' => '-',
            ],
            [
                'id_detail' => '2',
                'pertanyaan' => 'ini adalah pertanyaan kedua',
                'kunci' => 'b',
                'jawaban' => '-',
            ],
        ];
        $myfile = fopen("tes.json", "w") or die("Unable to open file!");
        fwrite($myfile, json_encode($arr));
        fclose($myfile);
        return;
    }

    public function baca()
    {
        $detailModel = new SoalDetailModel();
        $detail = $detailModel->cari(['id_soal' => 1]);
        $strJsonFileContents = file_get_contents('tes.json');
        // Convert to array 
        $array = json_decode($strJsonFileContents, true);
        dd($array);
    }
}
