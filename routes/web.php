<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/verplan', function () {
    return view('plan');
})->name('verplan')->middleware('auth');

Route::get('/verdepartamento', function () {
    return view('departamento');
})->name('verdepartamento')->middleware('auth');

Route::get('/vercategoria', function () {
    return view('categoria');
})->name('vercategoria')->middleware('auth');

Route::get('/versubcategoria', function () {
    return view('subcategoria');
})->name('versubcategoria')->middleware('auth');

Route::get('/verplanpolicial', function () {
    return view('planpolicial');
})->name('verplanpolicial')->middleware('auth');

Route::get('/localizacion', function () {
    return view('localizacion');
})->name('localizacion')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/indexuser', 'HomeController@indexuser')->middleware('auth')->name('indexuser');
Route::get('/tiponotificacion', 'HomeController@tiponotificacion')->middleware('auth')->name('tiponotificacion');
Route::get('/notificacion', 'HomeController@notificacion')->middleware('auth')->name('notificacion');
Route::resource('/user', 'UserController')->middleware('auth');
Route::post('/userkey/{user}', 'UserController@userkey')->middleware('auth');
Route::resource('/categoria', 'CategoriaController')->middleware('auth');
Route::resource('/subcategoria', 'SubcategoriaController')->middleware('auth');
Route::apiResource('/tiponotificaciones', 'TiponotificacionesController')->middleware('auth');
Route::apiResource('/notificaciones', 'NotificacionesController')->middleware('auth');
Route::apiResource('/plan', 'PlanController')->middleware('auth');
Route::apiResource('/departamento', 'DepartamentoController')->middleware('auth');
Route::apiResource('/policeplan', 'PoliceplanController')->middleware('auth');
Route::apiResource('/policesplan', 'PolicesplanController')->middleware('auth');
