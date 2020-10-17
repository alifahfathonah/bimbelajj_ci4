<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'tbl_program_pilihan';
    protected $allowedFields = ['kode_program', 'nama_program'];
    //protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}
