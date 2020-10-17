<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'tbl_kelas';
    protected $allowedFields = ['nama_kelas'];
    //protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}
