<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_name($name)
    {
        $category = Category::where('name', $name)->first();
        $post_collection = $category->posts()->get();
    }
}
