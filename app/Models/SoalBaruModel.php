<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalBaruModel extends Model
{
    protected $table = 'tbl_soal';
    protected $allowedFields = ['nama', 'mapel', 'kelas', 'program', 'author', 'waktu', 'tipe'];
    protected $returnType = 'App\Entities\Soal';
    protected $useTimestamps = true;

    public function tes()
    {
        return $this->table('tbl_soal')
            ->select('tbl_soal.nama,nama_program,nama_kelas')
            ->join('tbl_program_pilihan', 'tbl_soal.program = tbl_program_pilihan.id', 'left')
            ->join('tbl_kelas', 'tbl_soal.kelas = tbl_kelas.id', 'left')
            ->paginate(2);
    }
    public function myjoin()
    {
        $builder = $this->table('tbl_soal');
        $builder->select('tbl_soal.*,tbl_program_pilihan.nama_program,tbl_kelas.nama_kelas, tbl_admin.nama AS nama_author');
        $builder->join('tbl_program_pilihan', 'tbl_soal.program = tbl_program_pilihan.id');
        $builder->join('tbl_kelas', 'tbl_soal.kelas = tbl_kelas.id');
        $builder->join('tbl_admin', 'tbl_soal.author = tbl_admin.id');
        return $builder;
    }
    public function semua()
    {
        $builder = $this->myjoin();
        $pgdt = $builder->paginate(2, 'group1');
        $pg = $builder->pager;
        $arr = ['pgdt' => $pgdt, 'pg' => $pg];
        return $arr;
    }
    public function cari($keyword)
    {
        $builder = $this->myjoin();
        $cari = $builder->like('nama', $keyword);
        return $cari;
    }

    public function tes2()
    {
        $builder = $this->table('tbl_soal');
        $builder->select('tbl_soal.*,tbl_program_pilihan.nama_program,tbl_kelas.nama_kelas, tbl_admin.nama AS nama_author');
        $builder->join('tbl_program_pilihan', 'tbl_soal.program = tbl_program_pilihan.id');
        $builder->join('tbl_kelas', 'tbl_soal.kelas = tbl_kelas.id');
        $builder->join('tbl_admin', 'tbl_soal.author = tbl_admin.id');
        $pgdt = $builder->paginate(2, 'group1');
        $pg = $builder->pager;
        $arr = ['pgdt' => $pgdt, 'pg' => $pg];
        return $arr;
    }
}
