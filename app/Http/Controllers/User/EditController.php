<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
    public function index(User $user)
    {
        return view('user.edit', compact('user'));
    }
}
