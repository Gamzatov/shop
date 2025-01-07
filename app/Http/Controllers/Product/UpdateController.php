<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return view('tag.show', compact('tag'));
    }
}
