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

Route::group(['prefix' => 'categorias'], function (){
    Route::get('/listar',['uses' => 'CategoryController@index']);
    Route::get('/criar',['uses' => 'CategoryController@create']);
    Route::post('/salvar',['uses' => 'CategoryController@store']);
    Route::get('/{id}/editar',['uses' => 'CategoryController@edit']);
    Route::post('/{id}/atualizar',['uses' => 'CategoryController@update']);
    Route::get('/{id}/remover',['uses' => 'CategoryController@destroy']);
});

