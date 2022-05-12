<?php

use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
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
   //*****************************HOME PAGE ROUTES***************************//
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/references',[HomeController::class,'references'])->name('references');
    Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
    Route::get('/faq',[HomeController::class,'faq'])->name('faq');
//*************************************************************************//
    Route::get('/product/{id}',[HomeController::class,'product'])->name('product');
    Route::get('/categoryproducts/{id}/{slug}',[HomeController::class,'categoryproducts'])->name('categoryproducts');
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // TEST//
    Route::get('/test',[HomeController::class,'test']);
    //************************************** ADMIN PANEL ROUTES ***************//
    Route::prefix('admin')->name('admin.')->group(function (){
        Route::get('/',[AdminHomeController::class,'index'])->name('index');
        //************************************** GENERAL ROUTES  ***************//
        Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
        Route::post('/setting',[AdminHomeController::class,'settingupdate'])->name('setting.update');
       //*****************************ADMIN CATEGORY ROUTES**************//
    Route::prefix('/Category')->name('Category.')->controller(CategoryController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
        //*****************************ADMIN PRODUCT ROUTES**************//
        Route::prefix('/Product')->name('Product.')->controller(AdminProductController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
        //*****************************ADMIN IMAGE GALLERY ROUTES**************//
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function (){
            Route::get('/{pid}','index')->name('index');
            Route::post('/store/{pid}','store')->name('store');
            Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
        });
        //*****************************ADMIN Messages ROUTES**************//
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/show/{id}','show')->name('show');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
        //***************************** Admin Faq  ROUTES**************//
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
});
