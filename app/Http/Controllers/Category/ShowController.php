<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function index(Category $category)
    {
        return view('category.show', compact('category'));
    }
}
