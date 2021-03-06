<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Becarios;
use Illuminate\Support\Facades\DB;

class BecariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $becario= Becarios::all();
        return view('becarios.index')->with('becarios', $becario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('becarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $becarios= new Becarios();

        $becarios->nombre=$request->get('nombre');
        $becarios->apellidos=$request->get('apellidos');
        $becarios->domicilio=$request->get('domicilio');
        $becarios->telefono=$request->get('telefono');
        $becarios->correo=$request->get('correo');
        $becarios->contacto_emergencia=$request->get('contacto_emergencia');
        $becarios->escuela=$request->get('escuela');
        $becarios->nss=$request->get('nss');
        $becarios->comprobante_nss=$request->get('comprobante_nss');
        $becarios->vac_covid=$request->get('vac_covid');
        $becarios->cert_vac=$request->get('cert_vac');
        $becarios->padecimiento=$request->get('padecimiento');
        $becarios->ine=$request->get('ine');
        $becarios->const_estudiante=$request->get('const_estudiante');
        $becarios->doc_asig_esc=$request->get('doc_asig_esc');

        $becarios->save();
        return redirect ('/becarios');
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
