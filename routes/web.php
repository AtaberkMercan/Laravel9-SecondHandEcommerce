<?php

use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminOrderController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\userController;
use App\Http\Controllers\UserImageController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\UserSalesController;
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
    Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
    Route::view('/loginuser','home.login')->name('loginuser');
    Route::view('/registeruser','home.register')->name('registeruser');
    Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
    Route::view('/loginadmin','admin.login')->name('loginadmin');
    Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');
//*************************************************************************//
    Route::get('/product/{id}',[HomeController::class,'product'])->name('product');
    Route::get('/categoryproducts/{id}/{slug}',[HomeController::class,'categoryproducts'])->name('categoryproducts');
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // TEST//
    Route::get('/test',[HomeController::class,'test']);
    //************************************** ADMIN PANEL ROUTES ***************//
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function (){
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
        //*****************************ADMIN COMMENT ROUTES**************//
        Route::prefix('/comments')->name('comment.')->controller(CommentController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/show/{id}','show')->name('show');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
        //*****************************ADMIN USER ROUTES**************//
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::get('/show/{id}','show')->name('show');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
        });
        //****************************ORDERS***************************************//
        Route::prefix('/order')->name('order.')->controller(AdminOrderController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::post('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::get('/list/{status}','list')->name('list');
            Route::post('/update/{id}','update')->name('update');
            Route::post('/itemupdate/{id}','itemupdate')->name('itemupdate');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });

});
//********************************USER PANEL AUTH ROUTES ***********************//

Route::middleware('auth')->prefix('myaccount')->name('myaccount.')->group(function (){
    Route::get('/',[userController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[userController::class,'myreviews'])->name('myreviews');
    Route::get('/destroyreview/{id}',[userController::class,'destroyreview'])->name('destroyreview');
});
//********************************USER PANEL PRODUCT ***********************//
Route::middleware('auth')->prefix('user')->name('user.')->group(function (){
        Route::prefix('/Product')->name('Product.')->controller(UserProductController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
        //********************************USER PANEL IMAGE GALLERY***********************//
        Route::prefix('/image')->name('image.')->controller(UserImageController::class)->group(function (){
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });
    //********************************USER PANEL SHOPCART***********************//
        Route::prefix('/shopcart')->name('shopcart.')->controller(ShopcartController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::post('/store/{id}','store')->name('store');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
        //****************************ORDERS***************************************//
    Route::prefix('/order')->name('order.')->controller(OrderController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::post('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
         //*************************************Sales********************************//
    Route::prefix('/sales')->name('sales.')->controller(UserSalesController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::post('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/list/{status}','list')->name('list');
        Route::post('/update/{id}','update')->name('update');
        Route::post('/itemupdate/{id}','itemupdate')->name('itemupdate');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

});




