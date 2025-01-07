<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class ShowController extends Controller
{
    public function index(Tag $tag)
    {
        return view('tag.show', compact('tag'));
    }
}
