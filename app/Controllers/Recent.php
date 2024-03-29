<?php

namespace App\Controllers;

use App\Models\Post;
use App\Controllers\BaseController;

class Recent extends BaseController
{
    public function index()
    {

        helper('text');

        $post = new Post();
        $recent = $post->select([
            'posts.id', 
            'posts.title',
            'posts.image', 
            'posts.create_at', 
            'posts.description', 
            'categories.name as categoryName',
            'users.fistName as userFirstName',
            'users.lastName as userLastName'
        ])->join(
            'users',
            'users.id = posts.user_id'
        )->join(
            'categories',
            'categories.id = posts.category_id'

        )->orderBy('id', 'desc')->findAll(7);

        return view('/_partials/_recent',[
            'recent' => $recent
        ]);
    }
}
