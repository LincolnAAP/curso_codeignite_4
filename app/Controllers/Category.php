<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class Category extends BaseController
{
    

    private array $categories =[
        'culture' => 1,
        'businees' => 2,
        'lifeStyle' => 3

    ];

    public function index( string $category)
    {

        helper('text');

        if (!array_key_exists($category, $this->categories)){
            $categoryId = 1;
        }else{
            $categoryId = $this->categories[$category];
        }
        echo "<pre>";
        print_r($categoryId);
        echo "</pre>";
        $post = new Post();
        $posts = $post->select([
            'posts.title',
            'posts.image', 
            'posts.create_at',
            'posts.slug',  
            'posts.description', 
            'categories.name as categoryName',
            'users.fistName as userFirstName',
            'users.lastName as userLastName'
        ])->where('category_id', $categoryId)
        ->join(
            'users',
            'users.id = posts.user_id'
        )->join(
            'categories',
            'categories.id = posts.category_id'

        )->findAll(10);
        
        return view('_partials/_category', ['posts'=> $posts]);
    }
}
