<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
   /* public function index(){
        //return 'Lista de cats';
        return view('cats.index');
    }*/

    public function getIndex(){
        //return 'Lista de cats';
        return view('cats.index');
    }

    public function create(){
        return 'Form nova cat';
    }

    public function getCreate(){
        return 'Form nova cat';
    }

    public function store(){
        return 'Salvar dados cat';
    }

    public function edit($id){
        return 'Form cat com dados cat ID '.$id;
    }

    public function update($id){
        return 'Atualizar dados cat ID: '.$id;
    }

    public function destroy($id){
        return 'Remover cat ID '.$id;
    }


}
