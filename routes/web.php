<?php

use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
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
    Route::get('/admin/Category',[CategoryController::class,'index'])->name('admin_Category');
    Route::get('/admin/Category/create',[CategoryController::class,'create'])->name('admin_Category_create');
    Route::post('/admin/Category/store',[CategoryController::class,'store'])->name('admin_Category_store');
    Route::get('/admin/Category/edit/{id}',[CategoryController::class,'edit'])->name('admin_Category_edit');
    Route::post('/admin/Category/update/{id}',[CategoryController::class,'update'])->name('admin_Category_update');
    Route::get('/admin/Category/show/{id}',[CategoryController::class,'show'])->name('admin_Category_show');
    Route::get('/admin/Category/destroy/{id}',[CategoryController::class,'destroy'])->name('admin_Category_destroy');
