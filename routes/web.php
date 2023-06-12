<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/inicio', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get('/calendario', [\App\Http\Controllers\HomeController::class, 'calendar'])->name('home.calendar');
    Route::get('/asuntos', [\App\Http\Controllers\HomeController::class, 'subjects'])->name('home.subjects');




    Route::get('/search', [\App\Http\Controllers\HomeController::class, 'search'])->name('home.search');

    Route::get('/asuntosx', [\App\Http\Controllers\AsuntosController::class, 'index'])->name('asuntos.index');
    Route::get('/asuntos2', [\App\Http\Controllers\AsuntosController::class, 'asunto'])->name('asuntos.asunto');
});


Route::get('/abc', function () {
    return \App\Models\Document::query()
                  ->when(request('search'), function ($query, $search) {
                      $query->select('id', 'name', 'content')
                            ->selectRaw('
                    match(name, content) 
                    against(? in natural language mode) as score
                ', [$search])
                            ->whereRaw('
                    match(name, content) 
                    against(? in natural language mode) > 0.0000001
                ', [$search]);
                  })
                  ->get();
});