<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peserta extends Migration
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
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '25',
            ],
            'alamat' => [
                'type'       => 'TEXT',
                'constraint' => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'constraint' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'constraint' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('peserta');
    }

    public function down()
    {
        $this->forge->dropTable('peserta');
    }

}
