<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
        $titulo = "hola mundo"
        return response()->json($titulo);
        }  //
}
