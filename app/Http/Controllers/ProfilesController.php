<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.profile', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            //'password' => '',
            //'password_confirmation' => '',
        ]);

        $user->update($data);

        return redirect('/profile/{$user->id}');
    }
}
