<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subcategoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::with('subcategoria')->get()->where('id','!=',Auth::user()->id)->where('id','!=',1);

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
//        $user = User::create();
//        return 'a';
//        var_dump($request);
//        $request->password=encrypt('a');
//        return User::create($request->all());

        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->subcategoria_id = $request->subcategoria_id;
            $user->tipo = $request->tipo;
//            return $request->tipo;
            $user->estado = 'ACTIVO';

//            $imageName = time().'.'.$request->image->getClientOriginalExtension();
//            $archivo=$request->image->move(public_path('/images/users'));
            $file=$request->file('image')->store('images/users');
            $user->archivo=$file;
            $user->save();
            $user->subcategoria=Subcategoria::find($request->subcategoria_id);
            return $user;

        }catch (\Illuminate\Database\QueryException $e){
            //tu código
            return 0;
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
//        $user->password = encrypt($request->password);
        $user->subcategoria_id = $request->subcategoria_id;
        $user->tipo = $request->tipo;
        $user->estado = $request->estado;
        $user->save();
        return $user;

    }
    public function userkey(Request $request, $id){
        $user=User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::find($id)->delete();
    }
    public function userAndroid(){
        return User::all()->where('id','!=',1);
    }
}
