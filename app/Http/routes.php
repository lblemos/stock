<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("/produtos", "ProdutoController@listar");
Route::get("/produtos/mostrar/{id}", "ProdutoController@mostrar")->where('id', '[0-9]+');
Route::get("/produtos/novo","ProdutoController@novo");
Route::post("/produtos/adicionar", "ProdutoController@adicionar");
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/remover/{id}', 'ProdutoController@remover');
Route::get('/produtos/editar/{id}', 'ProdutoController@editar');
Route::post('/produtos/atualizar', 'ProdutoController@atualizar');