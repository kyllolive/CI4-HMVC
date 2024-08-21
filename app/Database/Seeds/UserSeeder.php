<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            'id_number' => '201811111',
            'email' => 'dev@gmail.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
            'user_status' => 1,
            'verification_code' => '123456',
            'reg_status' => 1,
            'reg_date' => date('Y-m-d H:i:s'),
            'activation_code' => date('Y-m-d H:i:s'),
            'operation_id' => '20181111',
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);

    }
}
