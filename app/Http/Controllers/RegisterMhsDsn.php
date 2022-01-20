<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterMhsDsn extends Controller
{
    public function index()
    {
        return view('dashboard/register/index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
}
