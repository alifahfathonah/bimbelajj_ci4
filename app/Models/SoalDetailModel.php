<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalDetailModel extends Model
{

    protected $table = 'tbl_soal_detail';
    protected $allowedFields = ['id', 'id_soal', 'pertanyaan', 'pembahasan', 'kunci'];
    protected $returnType = 'object';
    protected $useTimestamps = false;

    public function cari($where)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id,kunci');
        $query = $builder->getWhere($where);
        return $query->getResult();
    }
}
