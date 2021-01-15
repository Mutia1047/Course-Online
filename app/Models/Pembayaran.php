<?php namespace App\Models;

use CodeIgniter\Model;

class Pembayaran extends Model {

    protected $table = "pembayaran";

    public function insertCart($data) {
        return $this->db->table($this->table)->insert($data);
    }    
}
?>