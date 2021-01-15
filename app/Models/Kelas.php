<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';

    protected $allowedFields = ['nama_kelas', 'kategori', 'harga', 'gambar'];

    public function getKelas($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_kelas' => $id]);
        }
    }
    public function saveKelas($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editKelas($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_kelas', $id);
        return $builder->update($data);
    }
    public function hapusKelas($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_kelas' => $id]);
    }
}