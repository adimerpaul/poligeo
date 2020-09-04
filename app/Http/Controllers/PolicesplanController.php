<?php

namespace App\Http\Controllers;

use App\Policesplan;
use Illuminate\Http\Request;

class PolicesplanController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $policesplan=new Policesplan();
        $policesplan->policeplan_id=$request->policeplan_id;
        $policesplan->user_id=$request->user_id;
        $policesplan->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Policesplan  $policesplan
     * @return \Illuminate\Http\Response
     */
    public function show(Policesplan $policesplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Policesplan  $policesplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Policesplan $policesplan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Policesplan  $policesplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policesplan $policesplan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Policesplan  $policesplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policesplan $policesplan)
    {
        //
    }
}
