<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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
        return 'WELCOME TO LARAVEL';
    });
    Route::get('/test',[HomeController::class,'test']);
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
                  //************************************** ADMIN PANEL ***************
    Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');



