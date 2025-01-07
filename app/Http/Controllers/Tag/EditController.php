<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
    public function index(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }
}
