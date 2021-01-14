<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
            // membuat akun user
               [ 'nama'          => 'ridho',
                'password'		=> password_hash('12345', PASSWORD_DEFAULT),
                'email'			=> 'ridho@gmail.com',
                'role_id'		=> '1'],
                
            // membuat akun admin
               [ 'nama'          => 'admin',
                'password'		=> password_hash('admin', PASSWORD_DEFAULT),
                'email'			=> 'admin@gmail.com',
				'role_id'		=> '2']
        ];
        $this->db->table('user')->insertBatch($data);
	}
}