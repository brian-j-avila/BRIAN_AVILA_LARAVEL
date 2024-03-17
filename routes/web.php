<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;


//Route::get('', function () {
    //return view('estudiantes.index');
//});
//Route::get('/estudiantes/create', function () {
    //return view('estudiantes.create');
//});
route::resource('estudiantes',EstudiantesController::class);
