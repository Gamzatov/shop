<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;

class DeleteController extends Controller
{
    public function index(Color $color)
    {
        $color->delete();
        return redirect()->route('color.index');
    }
}
