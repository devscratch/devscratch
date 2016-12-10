<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
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
     * Where to redirect users after login / registration.
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
        $messages = [
          'name.required' => 'anda harus memasukan nama.',
          'email.required' => 'Anda harus memasukan email.',
          'password.required' => 'Anda harus memasukan password.',
          'password.min:6' => 'Password minimal memiliki 6 karakter a-zA-Z0-9 dan karakter lainya.',
          'agreements.required' => 'Anda harus menyetujui kebijakan dan persyaratan privasi.',
          'password.confirmed' => 'Password konfirmasi harus sama.',
          'email.unique' => 'Email tersebut telah digunakan.',
          'email.email' => 'Anda harus memasukan email address yang valid.'
        ];

        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'agreements' => 'required'
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'nickname' => substr(md5(base64_encode(uniqid(rand(),true))),0,10)
        ]);
    }
}
