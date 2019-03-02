<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('equipos/show/{id}', function ($id) {
    return view('equipos.show')->with('id', $id);
});

Route::get('equipos/create', function() {
    return view('equipos.create');
});

Route::get('equipos/edit/{id}', function($id) {
    return view('equipos.edit', array('id' => $id));
});

/*
Route::get('equipos/show/{id}', function($id) {
    return "detalle del equipo $id";
});
*/

Route::get('jugadores', function() {
    return "Listado de jugadores";
});

Route::get('jugadores/show/{id}', function($id) {
    return "Detalle de jugador {id}";
});

Route::get('jugadores/create', function() {
    return "Crear jugador";
});

Route::get('jugadores/edit/{id}', function() {
    return "Modificar jugador {id}";
});

Route::get('saludo/{nombre}/{apellido}', function($nombre, $apellido) {
	return "Bienvenido $nombre $apellido";
});

Route::get('Entrenador', function() {
	return view('admEntrenador');
});

Route::get('child', function() {
    return view('child');
});