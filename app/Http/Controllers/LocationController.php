<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('locations')
            ->select(DB::raw('nombre'))
            ->groupBy('nombre')
            ->get();
    }

    public function buscar(Request $request)
    {
        return DB::table('locations')
            ->select(DB::raw('nombre'))
            ->where('created_at','>=',$request->inicio)
            ->where('created_at','<=',$request->fin)
            ->groupBy('nombre')
            ->get();
//        return $request->inicio;
    }

    public function puntos(Request $request)
    {
        return DB::table('locations')
            ->where('created_at','>=',$request->f1)
            ->where('created_at','<=',$request->f2)
            ->where('nombre','=',$request->nombre)
//            ->groupBy('nombre')
            ->get();
//        return $request->inicio;
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
        $d=new Location();
        $d->lat=$request->lat;
        $d->lng=$request->lng;
        $d->nombre=$request->nombre;
        $d->save();
        return $d;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
