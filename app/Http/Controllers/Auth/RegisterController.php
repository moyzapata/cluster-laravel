<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Mail\solicitudMail;
use Illuminate\Support\Facades\Mail;
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
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'domicilio' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'ine' => ['required', 'string', 'max:255'],
            'contacto_emergencia' => ['required', 'string', 'max:255'],
            'escuela' => ['required', 'string', 'max:255'],
            //'const_estudiante' => ['required', 'string', 'max:255'],
            //'doc_asig_esc' => ['required', 'string', 'email', 'max:255'],
            'nss' => ['required', 'string', 'max:255'],
            //'comprobante_nss' => ['required', 'string', 'max:255'],
            'vac_covid' => ['required', 'string', 'max:255'],
            //'cert_vac' => ['required', 'string', 'max:255'],
            'padecimiento' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
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
            'name' => $data['name'],
            'apellidos' => $data['apellidos'],
            'domicilio' => $data['domicilio'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'ine' => $data['ine'],
            'contacto_emergencia' => $data['contacto_emergencia'],
            'escuela' => $data['escuela'],
            'const_estudiante' => $data['const_estudiante'],
            'doc_asig_esc' => $data['doc_asig_esc'],
            'nss' => $data['nss'],
            'comprobante_nss' => $data['comprobante_nss'],
            'vac_covid' => $data['vac_covid'],
            'cert_vac' => $data['cert_vac'],
            'padecimiento' => $data['padecimiento'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
