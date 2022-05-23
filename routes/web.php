<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
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
// 3- Call Controller Function
Route::get('/',[HomeController::class,'index'])->name('home');

// 4- Route-> Controller -> View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5- Route with parameters
Route::get('/parameter/{id}/{number}',[HomeController::class,'parameter'])->name('parameter');

// 6- Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//********************ADMİN PANEL ROUTES ******************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminHomeController::class, 'index'])->name('index');
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
});


