<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate([
            'email' => $data['email'],
        ]);

        return redirect()->route('user.index');
    }
}
