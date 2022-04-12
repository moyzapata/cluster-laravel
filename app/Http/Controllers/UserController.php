<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $users = new User();

        $users->name=$request->get('name');
        $users->apellidos=$request->get('apellidos');
        $users->domicilio=$request->get('domicilio');
        $users->Telefono=$request->get('Telefono');
        $users->email=$request->get('email');
        $users->contacto_emergencia=$request->get('contacto_emergencia');
        $users->escuela=$request->get('escuela');
        $users->nss=$request->get('nss');
        $users->comprobante_nss=$request->get('comprobante_nss');
        $users->vac_covid=$request->get('vac_covid');
        $users->cert_vac=$request->get('cert_vac');
        $users->padecimiento=$request->get('padecimiento');
        $users->ine=$request->get('ine');
        $users->const_estudiante=$request->get('const_estudiante');
        $users->doc_asig_esc=$request->get('doc_asig_esc');
        $users->email_verified_at=$request->get('email_verified_at');
        $users->password=$request->Hash::make(get('password'));
        
        $users->save();
        
        return view('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
