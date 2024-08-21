<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        //
        $this->call('RoleSeeder');
        $this->call('UserSeeder');

        // add role to seeded user

        $roleId = 1; // Replace with the actual role ID you want to assign
        $userId = 1; // Replace with the actual user ID you want to update

        $this->db->table('users')->update(['role_id' => $roleId], ['id' => $userId]);
    }
}
