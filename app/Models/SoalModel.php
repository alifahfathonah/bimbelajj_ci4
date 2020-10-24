<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
    protected $table = 'tbl_soal';
    protected $allowedFields = ['nama', 'mapel', 'jkelas', 'author', 'waktu', 'tipe'];
    protected $returnType = 'App\Entities\Soal';
    protected $useTimestamps = true;
}
