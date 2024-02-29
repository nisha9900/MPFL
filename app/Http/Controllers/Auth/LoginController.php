<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
{
    $input = $request->all();

    // Validate the incoming request
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Attempt to authenticate the user
    if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
        // If authentication is successful, redirect the user based on their role
       if (auth()->user()->role == 'admin') {
        return redirect()->route('admin.home');
    } elseif (auth()->user()->role == 'user') {
        return redirect()->route('home');
    }
    } else {
        // If authentication fails, redirect back to the login page with an error message
        return redirect()->route('login')->with('error', 'Invalid email/password combination');
    }
}

    
}