<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SignUpController extends Controller
{
    public function index()
    {
        return Inertia::render('sign-up');
    }

    public function store(SignUpRequest $request)
    {
        $user = User::create($request->all());

        Auth::login($user, true);

        return Inertia::render('dashboard');
    }
}
