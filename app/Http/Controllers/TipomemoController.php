<?php

namespace App\Http\Controllers;

use App\Tipomemo;
use Illuminate\Http\Request;

class TipomemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tipomemo::with('memo')->get();
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
        $t=new Tipomemo();
        $t->nombre=$request->nombre;
        $t->memo_id=$request->memo_id;
        $t->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipomemo  $tipomemo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t=Tipomemo::find($id);
        if ($t->estado=="MOSTRAR")
            $t->estado="OCULTO";
        else
            $t->estado="MOSTRAR";
//        $t->memo_id=$request->memo_id;
        $t->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipomemo  $tipomemo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipomemo $tipomemo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipomemo  $tipomemo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $t=Tipomemo::find($id);
        $t->nombre=$request->nombre;
        $t->memo_id=$request->memo_id;
        $t->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipomemo  $tipomemo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t=Tipomemo::find($id);
        $t->delete();
    }
}
