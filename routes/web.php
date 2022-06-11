<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\MenuController as AdminMenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test Comment
*/
// 1- Write in route and Do something in route
Route::get('hello', function () {
    return 'Hello World';
});


// 2- Coll view in route
Route::get('/welcome', function () {
    return view('welcome');
});
//********************HOME PAGE ROUTES ******************
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');


// 4- Route-> Controller -> View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5- Route with parameters
Route::get('/parameter/{id}/{number}',[HomeController::class,'parameter'])->name('parameter');

// 6- Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::get('/content/{id}',[HomeController::class,'content'])->name('content');
Route::get('/menucontents/{id}/{slug}',[HomeController::class,'menucontents'])->name('menucontents');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//********************ADMİN PANEL ROUTES ******************
Route::prefix('admin')->name('admin.')->group(callback: function () {
    Route::get('/',[AdminHomeController::class, 'index'])->name('index');
//********************GENERAL ROUTES ******************
    Route::get('/setting',[AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class, 'settingUpdate'])->name('setting.update');


//********************ADMİN MENU ROUTES ******************
    Route::prefix('/menu')->name('menu.')->controller(AdminMenuController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
});

    //********************ADMİN CONTENT ROUTES ******************
    Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    //********************ADMİN CONTENT IMAGE GALLERY ROUTES ******************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function (){
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });

    //********************ADMİN MESSAGE ROUTES ******************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    //********************ADMİN FAQ ROUTES ******************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

});


