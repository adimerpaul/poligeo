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
}
