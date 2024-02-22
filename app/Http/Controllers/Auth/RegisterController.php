<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // public function register()
    // {
    //     return view('register');
    // }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpassword'=>'required|same:password',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'dob' => 'required|date',
            'grandfathername' => 'required|string|max:255',
            'fathername' => 'required|string|max:255',
            'mothername' => 'required|string|max:255',
            'contactnumber' => 'required|string|max:255',
            'maritalstatus' => 'required|in:Unmarried,Married', // Add validation for marital status
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for the upload image
            'province1' => 'required|string|max:255',
            'province2' => 'required|string|max:255',
            'district2'=>'required|string|max:255',
            'district21'=>'required|string|max:255',
            'municipality'=>'required|string|max:255',
            'ward' => 'required|numeric|min:1|max:999',
            'country'=>'required|string|max:255',
        ],['cpassword.same'=>'The confirm password and password must match.']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}