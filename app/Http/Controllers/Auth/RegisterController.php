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
    protected $redirectTo = 'register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function index()
    {
       
        return view('auth.register');
        
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
        'firstname' => 'required|string|max:255',
        'middlename' => 'nullable|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'cpassword' => 'required|same:password',
        'mothername' => 'required|string|max:255',
        'fathername' => 'required|string|max:255',
        'gender' => 'required|in:Male,Female,Other',
        'spousename' => 'nullable|string|max:255',
        'dob_bs' => 'required|date',
        'dob_ad' => 'required|date',
        'contactnumber' => 'required|string|max:255',
        'grandfathername' => 'nullable|string|max:255',
        'grandmothername' => 'nullable|string|max:255',
        'role' => 'required|in:admin,user',
        'maritalstatus' => 'required|in:Unmarried,Married',
            // 'filename' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'province1' => 'required|string|max:255',
            // 'province2' => 'required|string|max:255',
            // 'district2'=>'required|string|max:255',
            // 'district21'=>'required|string|max:255',
            // 'municipality'=>'required|string|max:255',
            // 'ward' => 'required|numeric|min:1|max:999',
            // 'country'=>'required|string|max:255',
        ]);
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
       'firstname' => $data['firstname'],
        'middlename' => $data['middlename'] ?? null,
        'lastname' => $data['lastname'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'mothername' => $data['mothername'],
        'fathername' => $data['fathername'],
        'gender' => $data['gender'], // Uncomment if you want to use it and ensure it's optional
        'spousename' => $data['spousename'] ?? null, // Same here, uncomment if needed
        'dob_bs' => $data['dob_bs'],
        'dob_ad' => $data['dob_ad'],
        'contactnumber' => $data['contactnumber'],
        'grandfathername' => $data['grandfathername'] ?? null, // This change ensures no error if 'grandfathername' is not provided
        'grandmothername' => $data['grandmothername'] ?? null,
        'role' => $data['role'],
        'maritalstatus' => $data['maritalstatus'],
        // Add any other fields you need to store, ensuring they match your database schema
    ]);
}

}