<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return view('category.show', compact('category'));
    }
}
