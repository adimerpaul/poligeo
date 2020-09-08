<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
class CategoriaController extends Controller{
    function index(){
        return Categoria::all();
//        return Categoria::with('subcategorias')->get();
        //        return Subcategoria::with('categoria')->get();

    }
    public function store(Request $request)
    {
        $de=new Categoria();
        $de->nombre=$request->nombre;
        $de->save();
    }
    public function update(Request $request, $id)
    {
        $de=Categoria::find($id);
        $de->nombre=$request->nombre;
        $de->save();
    }
    public function destroy($id)
    {
        $de=Categoria::find($id);
        $de->delete();
    }
}
