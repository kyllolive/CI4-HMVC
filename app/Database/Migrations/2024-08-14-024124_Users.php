<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //Users
        
         $this->forge->addField([
                'id' => [
                    'type'           => 'bigint',
                    'constraint'     => 25,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'id_number' => [
                    'type'       => 'char',
                    'constraint' => 10,
                    'null' => false,
                ],
                'email' => [
                    'type' => 'varchar',
                    'constraint' => 100,
                    'null' => false,
                ],
                'password' => [
                    'type' => 'varchar',
                    'constraint' => 100,
                    'null' => false,
                ],
                'user_status' => [
                    'type' => 'tinyint',
                    'constraint' => 4,
                    'null' => false,
                ],
                'verification_code' => [
                    'type' => 'varchar',
                    'constraint' => 255,
                    'null' => false,
                ],
                'reg_status' => [
                    'type' => 'tinyint',
                    'constraint' => 4,
                    'null' => false,
                ],
                'reg_date' => [
                    'type' => 'datetime',
                    'null' => false,
                ],
                'activation_code' => [
                    'type' => 'datetime',
                    'null' => false,
                ],
                'operation_id' => [
                    'type'       => 'char',
                    'constraint' => 8,
                    'null' => false,
                ],
                'user_type' => [
                    'type'       => 'tinyint',
                    'constraint' => 4,
                    'null' => false,
                ],
                'role_id' => [
                    'type'       => 'bigint',
                    'unsigned'   => true,
                    'null'       => false,
                    'after'      => 'id',
                ],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('users');
            $this->forge->addForeignKey('role_id','roles','id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        //

        $this->forge->dropTable('users');
    }
}
