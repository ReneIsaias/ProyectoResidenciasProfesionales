<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
<<<<<<< HEAD
use Illuminate\Support\Facades\Mail;
=======
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
use App\Mail\UserRegistered;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'nameUser'          => ['required', 'string', 'min:2', 'max:30'],
            'firstLastname'     => ['required', 'string', 'min:2', 'max:30'],
            'secondLastname'    => ['required', 'string', 'min:2', 'max:30'],
            'phoneUser'         => ['required', 'numeric', 'min:10'],
            'name'              => ['required', 'string', 'min:4', 'max:100'],
            'email'             => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
            'statusUser'        => ['required', 'string'],
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
<<<<<<< HEAD
=======
        //Creacion de usuario
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
        $user = User::create([
            'nameUser'          => $data['nameUser'],
            'firstLastname'     => $data['firstLastname'],
            'secondLastname'    => $data['secondLastname'],
            'phoneUser'         => $data['phoneUser'],
            'name'              => $data['name'],
            'email'             => $data['email'],
            'password'          => Hash::make($data['password']),
            'statusUser'        => $data['statusUser'],
        ]);

        //Envio de email usando mailer
        /* Mail::to($data['email'])->queue(new UserRegistered); */
        Mail::to('admin@admin.com')->queue(new UserRegistered($user));

        //Envio de correo usanod GMAIL
        /* Mail::mailer('mailgun')->to('rene030498@gmail.com')->send(new UserRegistered($user)); */
        return $user;
    }
}
