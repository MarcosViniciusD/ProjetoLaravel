<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show($id = ''){
        return "O item procurado tem o ID: " . $id;
    }
}
