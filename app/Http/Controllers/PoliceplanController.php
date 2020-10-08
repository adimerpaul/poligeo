<?php

namespace App\Http\Controllers;

use App\Policeplan;
use Illuminate\Http\Request;

class PoliceplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Policeplan::with('plan')->with('departamento')->get();
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
        $policeplan=new Policeplan();
        $policeplan->inicio=$request->inicio;
        $policeplan->fin=$request->fin;
        $policeplan->departamento_id=$request->departamento_id;
        $policeplan->plan_id=$request->plan_id;
        $policeplan->save();
        return $policeplan;
//        return Policeplan::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Policeplan  $policeplan
     * @return \Illuminate\Http\Response
     */
    public function show(Policeplan $policeplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Policeplan  $policeplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Policeplan $policeplan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Policeplan  $policeplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policeplan $policeplan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Policeplan  $policeplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policeplan $policeplan)
    {
        //
    }
}
