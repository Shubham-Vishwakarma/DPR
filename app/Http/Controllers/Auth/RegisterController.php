<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\License;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'license' => 'required|string|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $licensed_user = License::where('email','=',$data['email'])->where('email','=',$data['email'])
                                ->where('phone','=',$data['phone'])->first();

        error_log('Licensed_user = ' . $licensed_user->name);

        if($licensed_user){
            return User::create([
                'username' => $licensed_user->name,
                'license' => $licensed_user->license,
                'email' => $licensed_user->email,
                'password' => bcrypt($data['password']),
                'phone' => $licensed_user->phone,
                'builder_id' => $licensed_user->builder_id
            ]);
        }

        return $licensed_user;
    }
}
