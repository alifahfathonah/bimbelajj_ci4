<?php

namespace App\Models;

use CodeIgniter\Model;

class UjianModel extends Model
{
    protected $table = 'tbl_ujian';

    protected $allowedFields = ['id_siswa', 'id_soal', 'list_soal', 'list_jwb', 'mulai', 'selesai', 'status', 'nilai'];
    protected $returnType = 'App\Entities\Ujian';
    protected $useTimestamps = true;

    public function cari($where)
    {
        $builder = $this->db->table($this->table);
        $query = $builder->getWhere($where);
        return $query->getResult();
    }
}
