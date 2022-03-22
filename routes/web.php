<?php

use App\Http\Controllers\HomeController;
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

Route::get('/welcome',function(){
    return view('welcome');
});
Route::get('/text', function () {
    return 'WELCOME';
});
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/show',[HomeController::class,'show']);
Route::get('/test',[HomeController::class,'test']);
Route::get('/variable/{id}/{Key}',[HomeController::class,'variable']);
Route::post('/save',[HomeController::class,'save'])->name('save');
Route::redirect('/here','show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
