<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Subcategoria;
class SubcategoriaController extends Controller
{
    function index(Request $request){
//        if ($request->ajax()){
            return Subcategoria::with('categoria')->get();
//        return User::with('subcategoria')->get();
//        }else{
//            return view('home');
//        }
//        return Subcategoria::with('categoria')->get();

    }

    public function store(Request $request)
    {
        $de=new Subcategoria();
        $de->nombre=$request->nombre;
        $de->categoria_id=$request->categoria_id;
        $de->save();
    }
    public function update(Request $request, $id)
    {
        $de=Subcategoria::find($id);
        $de->nombre=$request->nombre;
        $de->categoria_id=$request->categoria_id;
        $de->save();
    }
    public function destroy($id)
    {
        $de=Subcategoria::find($id);
        $de->delete();
    }
}
