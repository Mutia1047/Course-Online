<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    public function getKelas($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
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
        $builder->where('id', $id);
        return $builder->update($data);
    }
    public function hapusKelas($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}