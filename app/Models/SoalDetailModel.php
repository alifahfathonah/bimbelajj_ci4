<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalDetailModel extends Model
{

    protected $table = 'tbl_soal_detail';
    protected $allowedFields = ['id_soal', 'pertanyaan', 'pembahasan', 'kunci'];
    protected $returnType = 'App\Entities\SoalDetail';
    protected $useTimestamps = true;
}
