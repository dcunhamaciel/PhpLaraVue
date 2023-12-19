<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        $user->load('teams');
        //$user->teams()->attach(1);
        //$user->teams()->detach(2);
        //$user->teams()->sync([1, 3]);
        //$user->teams()->syncWithoutDetaching([2]);

        return view('user', [
            'user' => $user
        ]);
    }
}
