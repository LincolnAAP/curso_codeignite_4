<?php

namespace App\Controllers;

use App\Models\Category;

class Home extends BaseController
{
    public function index(): string
    {
      
        

        return view('home', ['title' => 'Home']);
    }
}
