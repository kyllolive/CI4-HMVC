<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        //roles
         $this->forge->addField([
            'id' => [
                'type'           => 'bigint',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'role_name' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => false,
            ],
            'description' => [
                'type'       => 'text',
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('roles');
    }

    public function down()
    {
        //
        $this->forge->dropTable('roles');
    }
}
