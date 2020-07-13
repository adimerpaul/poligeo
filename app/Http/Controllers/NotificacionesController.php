<?php

namespace App\Http\Controllers;

use App\Notificaciones;
use App\tiponotificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class NotificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return Notificaciones::with('tiponotificaciones')->get();
//        return Notificaciones::all();
        $users = DB::select('SELECT n.id,n.estado,n.titulo,n.contenido,t.nombre,t.color,n.tipo_id
FROM notificaciones n
INNER JOIN tiponotificaciones t ON t.id=n.tipo_id');
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noti=new Notificaciones;
        $noti->titulo=$request->titulo;
        $noti->contenido=$request->contenido;
        $noti->user_id=Auth::user()->id;
        $noti->tipo_id=$request->tipo_id;
        $noti->save();
        return Auth::user();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notificaciones  $notificaciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noti=Notificaciones::find($id);

        if ($noti->estado=="ACTIVO")
            $noti->estado="INACTIVO";
        else
            $noti->estado="ACTIVO";
        $noti->save();
return 1;
//        return $noti->estado;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notificaciones  $notificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo=Notificaciones::find($id);
        $tipo->titulo=$request->titulo;
        $tipo->contenido=$request->contenido;
        $tipo->tipo_id=$request->tipo_id;
        $tipo->save();
        echo "1";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notificaciones  $notificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Notificaciones::find($id)->delete();
    }
}
