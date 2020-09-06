<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create_user() {
        $this->validate(request(), [
            'add_username' => 'required',
            'add_email' => 'required',
            'add_password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => request('add_username'),
            'email' => request('add_email'),
            'password' => request('add_password')
        ]);
        return redirect('/');
    }
}
