<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DeleteController extends Controller
{
    public function index(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
