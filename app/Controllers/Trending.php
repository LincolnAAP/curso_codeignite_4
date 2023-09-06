<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class Trending extends BaseController
{
    public function index()
    {
        $post = new Post();
        $trending = $post->select([
            'posts.title',
            'users.fistName as userFirstName',
            'users.lastName as userLastName'
        ])->orderBy(
            'visits', 
            'desc'
        )->join(
            'users',
            'users.id = posts.user_id'
        )->findAll(5);
        return view('/_partials/_trending', ['posts'=>$trending]);
    }
}
