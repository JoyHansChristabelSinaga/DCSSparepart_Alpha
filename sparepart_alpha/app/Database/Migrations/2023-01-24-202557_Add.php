<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idadd' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Quantity_add' => [
                'type'       => 'INT',
                'constraint' => 100,
            ],
            'add_by' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('idadd', true);
        $this->forge->createTable('add');
    }

    public function down()
    {
        $this->forge->dropTable('add');
    }
}
