<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table = 'tbl_peserta';
    protected $allowedFields = ['nama', 'username', 'password', 'salt', 'tgl_lahir', 'alamat', 'nomor_hp', 'foto', 'asal_sekolah', 'kelas', 'alamat_sekolah', 'program_pilihan', 'status_diterima'];
    protected $returnType = 'App\Entities\Peserta';
    protected $useTimestamps = true;

    public function join($id = NULL)
    {
        //$db      = \Config\Database::connect();
        $builder = $this->db->table('tbl_peserta a');
        $builder->select('a.*,b.nama_program,c.nama_kelas',);
        $builder->join('tbl_program_pilihan b', 'a.program_pilihan = b.id');
        $builder->join('tbl_kelas c', 'a.kelas = c.id');
        if ($id == NULL) {
            $query = $builder->get();
        } else {
            $query = $builder->getWhere(['a.id' => $id]);
        }
        return $query->getResult();
    }
}
