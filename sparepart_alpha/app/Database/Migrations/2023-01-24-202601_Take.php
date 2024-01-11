<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Take extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idtake' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Quantity_take' => [
                'type'       => 'INT',
                'constraint' => 100,
            ],
            'take_by' => [
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
        $this->forge->addKey('idtake', true);
        $this->forge->createTable('take');
    }

    public function down()
    {
        $this->forge->dropTable('take');
    }
}
