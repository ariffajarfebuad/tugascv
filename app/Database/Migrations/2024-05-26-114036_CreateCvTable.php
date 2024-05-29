<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCvTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'experience' => [
                'type' => 'TEXT',
            ],
            'education' => [
                'type' => 'TEXT',
            ],
            'skills' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('cv');
    }

    public function down()
    {
        $this->forge->dropTable('cv');
    }
}
