<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sparepart extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'MC' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Quantity' => [
                'type'       => 'INT',
                'constraint' => 100,
            ],
            'Location' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Note' => [
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('spare');
    }

    public function down()
    {
        $this->forge->dropTable('data');
    }
}
