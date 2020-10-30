<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbl_admin';

    protected $allowedFields = ['username', 'password', 'nama', 'nomor_hp', 'jabatan', 'foto', 'user_level', 'status'];
    protected $useTimestamps = true;
    protected $returnType = 'App\Entities\Admin';

    public function cari($keyword)
    {
        return $this->table($this->table)->like('nama', $keyword)->orLike('username', $keyword)->orLike('nomor_hp', $keyword);
    }
}
