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


$configs = [
    'getIndex' => 'cats.index',
    'getCriar' => 'cats.create',
    'getEditar' => 'cats.edit',
    'getSalvar' => 'cats.store',
    'getAtualizar' => 'cats.update',
    'getRemover' => 'cats.destroy'

];

Route::controller('categorias', 'CategoryController', $configs);

/*Route::group(['as' => 'cats.','prefix' => 'categorias'], function (){
    Route::get('',['as' => 'index', 'uses' => 'CategoryController@index']);
    //Route::get('/criar',['as' => 'create', 'uses' => 'CategoryController@create']);
    Route::get('/nova',['as' => 'create', 'uses' => 'CategoryController@create']);
    Route::post('/salvar',['as' => 'store', 'uses' => 'CategoryController@store']);
    Route::get('/{id}/editar',['as' => 'edit', 'uses' => 'CategoryController@edit']);
    Route::post('/{id}/atualizar', ['as' => 'update','uses' => 'CategoryController@update']);
    Route::get('/{id}/remover',['as' => 'destroy', 'uses' => 'CategoryController@destroy']);
});*/

