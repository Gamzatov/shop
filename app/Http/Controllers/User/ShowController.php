<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function index(User $user)
    {
        return view('user.show', compact('user'));
    }
}
