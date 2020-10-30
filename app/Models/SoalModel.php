<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Soal;

class SoalModel extends Model
{
    protected $table = 'tbl_soal';
    protected $allowedFields = ['nama', 'mapel', 'kelas', 'program', 'author', 'waktu', 'tipe'];
    protected $returnType = 'App\Entities\Soal';
    protected $useTimestamps = true;

    public function gabung()
    {
        $builder = $this->table('tbl_soal');
        $builder->select('tbl_soal.*,tbl_program_pilihan.nama_program,tbl_kelas.nama_kelas, tbl_admin.nama AS nama_author');
        $builder->join('tbl_program_pilihan', 'tbl_soal.program = tbl_program_pilihan.id');
        $builder->join('tbl_kelas', 'tbl_soal.kelas = tbl_kelas.id');
        $builder->join('tbl_admin', 'tbl_soal.author = tbl_admin.id');
        return $builder;
    }

    public function cari($cari)
    {
        $builder = $this->gabung();
        $builder->like('tbl_soal.nama', $cari);
        $builder->orLike('nama_program', $cari);
        $builder->orLike('nama_kelas', $cari);
        $builder->orLike('tbl_admin.nama', $cari);
        return $builder;
    }
}
