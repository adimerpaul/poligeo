<?php

namespace App\Http\Controllers;

use App\tiponotificaciones;
use Illuminate\Http\Request;

class TiponotificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tiponotificaciones::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo=new  tiponotificaciones;
        $tipo->nombre=$request->nombre;
        $tipo->color=$request->color;
        $tipo->save();
        echo $tipo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tiponotificaciones  $tiponotificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(tiponotificaciones $tiponotificaciones)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tiponotificaciones  $tiponotificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(tiponotificaciones $tiponotificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tiponotificaciones  $tiponotificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo=tiponotificaciones::find($id);
        $tipo->nombre=$request->nombre;
        $tipo->color=$request->color;
        $tipo->save();
        echo "1";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tiponotificaciones  $tiponotificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return tiponotificaciones::find($id)->delete();
    }
}
