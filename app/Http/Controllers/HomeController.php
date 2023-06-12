<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        return view('home.index');
    }

    public function calendar(){

        return view('home.calendar');
    }

    public function subjects(){

        return view('home.subjects');
    }

    public function search(){
    $searchQuery = 'RAFAEL HERNANDEZ';
    $results = DB::table('documents')
                 ->select(DB::raw("*, MATCH(name, content) AGAINST('$searchQuery' IN NATURAL LANGUAGE MODE) AS score"))
                 ->whereRaw("MATCH(name, content) AGAINST('$searchQuery' IN NATURAL LANGUAGE MODE)")
                 ->orderBy('score', 'desc')
                 ->get();

    return view('home.search');
}
}
