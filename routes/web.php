<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/text', function () {
    return 'WELCOME';
});
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/show',[\App\Http\Controllers\HomeController::class,'show']);
Route::redirect('/here','show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
