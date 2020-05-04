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

Route::get('/', function () {
    return view('welcome');
});

  
Route::get('admin/estados', ['as'=>'admin.estados','uses'=>'Admin\EstadoController@index']);
Route::get('admin/estados/adicionar', ['as'=>'admin.estados.adicionar','uses'=>'Admin\EstadoController@adicionar']);
Route::post('admin/estados/salvar',['as'=>'admin.estados.salvar','uses'=>'Admin\EstadoController@salvar']);
Route::put('admin/estados/atualizar/{id}', ['as'=>'admin.estados.atualizar','uses'=>'Admin\EstadoController@atualizar']);
Route::get('admin/estados/editar/{id}', ['as'=>'admin.estados.editar','uses'=>'Admin\EstadoController@editar']);
Route::get('admin/estados/excluir/{id}', ['as'=>'admin.estados.excluir','uses'=>'Admin\EstadoController@excluir']);