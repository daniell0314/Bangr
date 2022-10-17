<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function index()
    {
        return Inertia::render('login');
    }

    public function login(Request $request)
    {
        if(Auth::check()) {
            return Inertia::render('dashboard');
            return Redirect::route('users.index');
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return Inertia::render('dashboard');
        }

        return Inertia::render('login', [
            'error'    =>  "The password you’ve entered is incorrect"
        ]);
    }
}
