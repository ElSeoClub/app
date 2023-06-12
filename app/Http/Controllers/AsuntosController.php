<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsuntosController extends Controller
{
    public function index(){
        return view('asuntos.index');
    }

    public function asunto(){
        return view('asuntos.asunto');
    }
}
