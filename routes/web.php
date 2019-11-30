<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('nosotros', function (){
	return view('nosotros');
});

Route::get('servicios', function (){
	return view('servicios');
});

Route::get('productos','ProductosController@listar');
Route::get('productos-crear','ProductosController@crear');
Route::get('productos-editar/{id}','ProductosController@editar');
Route::get('productos-borrar/{id}','ProductosController@borrar');

Route::resource('servicios','ServiciosController');

	//Route::get('servicios','ServiciosController@index'); //Listar
	//Route::get('servicios/{id}','ServiciosController@show'); //Mostrar
	//Route::get('servicios/create','ServiciosController@create'); //Form crear
	//Route::post('servicios','ServiciosController@store'); //Guardar
	//Route::get('servicios/{id}/edit','ServiciosController@edit'); //Form editar
	//Route::put('servicios/{id}','ServiciosController@update'); //Actualizar
	//Route::delete('servicios/{id}','ServiciosController@destroy'); //Borrar

Route::get('contactenos','PaginasController@contactenos');