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
}
