<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbl_tutor';

    protected $allowedFields = ['username', 'password', 'nama', 'nomor_hp', 'jabatan'];
    //protected $returnType = 'App\Entities\User';
    protected $useTimestamps = true;
}
