<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
	public function up()
	{
		$this->db->DisableForeignKeyChecks();
		$this->forge->addField([
			'id_pembayaran'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_kelas'           => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'nama_kelas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '256'
			],
			'harga' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'id_user' => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_pembayaran', TRUE);
		$this->forge->addForeignKey('id_kelas','kelas','id_kelas');

		// Membuat tabel pembayaran
		$this->forge->createTable('pembayaran', TRUE);
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pembayaran');
	}
}
