<?php

namespace App\Database\Seeds;

use Faker\Factory;
use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
         $faker = Factory::create('pt_BR');
        for ($i=1; $i <= 100; $i++){
            $data =[
                'fistName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'email' => $faker->email,
                'password' => password_hash('123', PASSWORD_DEFAULT),
            ];
            $this->db->table('users')->insert($data);
        }


    }
}
