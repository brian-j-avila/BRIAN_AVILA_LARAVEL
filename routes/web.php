<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('auth.login');
});
//Route::get('/estudiantes/create', function () {
    //return view('estudiantes.create');
//});
route::resource('estudiantes',EstudiantesController::class)->middleware('auth');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'], function () {
    Route::get('/',[EstudiantesController::class,'index'])->name('home');});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
