<?php

namespace App\Cells;

use App\Models\Category;

class CategoryCell {
    public function render(){
        $category = new Category();
        $categories = $category->dbRead()->findAll();
        // $categories = $category->select('name,slug')->findAll();
        
        return view('partials/cell/category', ['categories' => $categories]);
    }
}
