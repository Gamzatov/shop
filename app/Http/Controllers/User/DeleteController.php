<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class DeleteController extends Controller
{
    public function index(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
