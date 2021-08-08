<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function edit(User $user)
    {
        return view('admin.edit', ['user' => $user]);
    }


}
