<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class EditController extends Controller
{
    public function index(Product $product)
    {
        return view('product.edit', compact('product'));
    }
}
