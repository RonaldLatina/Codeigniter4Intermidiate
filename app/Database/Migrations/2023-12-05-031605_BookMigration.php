<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BookMigration extends Migration
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
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'author' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'year' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            "created_at datetime default current_timestamp",
            "updated_at datetime on Update CURRENT_TIMESTAMP NULL default current_timestamp"
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbbooks');
    }

    public function down()
    {
        $this->forge->dropTable('tbbooks');
    }
}
