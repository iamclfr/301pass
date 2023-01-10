<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function show()
    {
        // TODO : Create passwords table, passwords is accessible for 1 user only
        return view('password.show', [
            'password' => 'SHOW ALL PASSWORD'
        ]);
    }
}
