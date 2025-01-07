<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        // Обновляем пароль, только если он не пустой
        if (empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();
        return view('user.show', compact('user'));
    }
}
