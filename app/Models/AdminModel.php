<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbl_admin';

    protected $allowedFields = ['username', 'password', 'nama', 'nomor_hp', 'jabatan', 'user_level', 'status'];
    //protected $returnType = 'App\Entities\User';
    protected $useTimestamps = true;
}
