<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table = 'tbl_peserta';
    protected $allowedFields = ['nama', 'username', 'password', 'salt', 'tgl_lahir', 'alamat', 'nomor_hp', 'asal_sekolah', 'kelas', 'alamat_sekolah', 'program_pilihan', 'status'];
    //protected $returnType = 'App\Entities\User';
    protected $useTimestamps = true;
}
