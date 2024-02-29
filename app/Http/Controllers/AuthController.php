<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(){
        return view ("/");
    }
    public function register() {
    return redirect('/');
}

public function showRegistrationForm() {
    return redirect('/');
}
}