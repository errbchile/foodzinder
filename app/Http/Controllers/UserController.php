<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=' , 1)->get();
        return view("users.index", ['users' => $users]);
    }
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view("users.edit", ['user' => $user]);
    }
    public function update(Request $request)
    {
        $user = User::where('id', $request->input('id'))->first();
        $user->profile = $request->input('profile');
        $user->update();

        $users = User::where('id', '!=' , 1)->get();
        return view("users.index", ['users' => $users]);
    }
}
