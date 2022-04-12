<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitudes;
use Illuminate\Support\Facades\Mail;
use App\Mail\solicitudMail;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $solicitudes= Solicitudes::all();
        return view('solicitudes.index')->with('solicitudes', $solicitudes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitudes= new Solicitudes();

        $solicitudes->name=$request->get('name');
        $solicitudes->apellidos=$request->get('apellidos');
        $solicitudes->telefono=$request->get('telefono');
        $solicitudes->escuela=$request->get('escuela');
        $solicitudes->cv=$request->get('cv');
        $solicitudes->email=$request->get('email');

        Mail::to("moycruz000@gmail.com")->send(new solicitudMail($solicitudes));

        $solicitudes->save();
        return redirect ('/solicitudes/create');
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
