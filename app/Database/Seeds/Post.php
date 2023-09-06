<?php

namespace App\Database\Seeds;

use Faker\PicsumPhotosProvider;
use Faker\Factory;
use CodeIgniter\Database\Seeder;

class Post extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');
        for ($i=1; $i <= 100; $i++){
            $title = $faker->sentence(3);
            $data =[
                'user_id' => $faker->numberBetween(1, 100),
                'category_id' => $faker->numberBetween(1, 100),
                'title' => $title,
                'slug' => strtolower( str_replace(' ', '-', $title)),
                'visits' => $faker->numberBetween(1, 100),
                'image' => $faker->imageUrl(),
                'description' => $faker->paragraph(5),
            ];
            $this->db->table('posts')->insert($data);
        }
}
}