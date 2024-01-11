<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'idlogin'          => [
				'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'UserName'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
 
		]);
		$this->forge->addPrimaryKey('idlogin', true);
		$this->forge->createTable('login');
    }

    public function down()
    {
        $this->forge->dropTable('login');
    }
}
