<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_kelas'           => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_kelas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '256'
			],
			'kategori'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '256',
			],
			'harga' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'gambar' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_kelas', TRUE);

		// Membuat tabel kelas
		$this->forge->createTable('kelas', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kelas');
	}
}
