<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index()
    {
        return view('tag.create');
    }
}
