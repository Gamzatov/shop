<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
    public function index(Category $category)
    {
        return view('category.edit', compact('category'));
    }
}
