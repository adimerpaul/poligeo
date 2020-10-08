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

Route::get('/vermemo', function () {
    return view('memo');
})->name('vermemo')->middleware('auth');

Route::get('/vertipomemo', function () {
    return view('tipomemo');
})->name('vertipomemo')->middleware('auth');

Route::get('/localizacion', function () {
    return view('localizacion');
})->name('localizacion')->middleware('auth');


Route::get('/rcategorias', function () {
    return view('rcategorias');
})->name('rcategorias')->middleware('auth');


Route::get('/rsubcategorias', function () {
    return view('rsubcategorias');
})->name('rsubcategorias')->middleware('auth');

Route::get('/rusuarios', function () {
    return view('rusuarios');
})->name('rusuarios')->middleware('auth');

Route::get('/rtiponotificaciones', function () {
    return view('rtiponotificaciones');
})->name('rtiponotificaciones')->middleware('auth');

Route::get('/rnotificaciones', function () {
    return view('rnotificaciones');
})->name('rnotificaciones')->middleware('auth');

Route::get('/rplanes', function () {
    return view('rplanes');
})->name('rplanes')->middleware('auth');

Route::get('/rdepartamentos', function () {
    return view('rdepartamentos');
})->name('rdepartamentos')->middleware('auth');

Route::get('/rplanespoliciales', function () {
    return view('rplanespoliciales');
})->name('rplanespoliciales')->middleware('auth');

Route::get('/rmemos', function () {
    return view('rmemos');
})->name('rmemos')->middleware('auth');

Route::get('/rtipomemos', function () {
    return view('rtipomemos');
})->name('rtipomemos')->middleware('auth');

Route::get('/verlocation', function () {
    return view('verlocation');
})->name('verlocation')->middleware('auth');




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
Route::apiResource('/memo', 'MemoController')->middleware('auth');
Route::apiResource('/tipomemo', 'TipomemoController')->middleware('auth');
Route::apiResource('/location', 'LocationController')->middleware('auth');
Route::post('/buscar', 'LocationController@buscar')->middleware('auth');
Route::post('/puntos', 'LocationController@puntos')->middleware('auth');
