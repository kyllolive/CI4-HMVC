<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            'role_name' => 'Admin',
            'description' => 'Administrator',
        ];

        // Using Query Builder

        $this->db->table('roles')->insert($data);


    }
}
