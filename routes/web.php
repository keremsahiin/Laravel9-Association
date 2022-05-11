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
Route::get('/admin',[AdminHomeController::class , 'index'])->name('admin');
//********************ADMİN CONTENT ROUTES ******************
Route::get('/admin/menu',[\App\Http\Controllers\AdminPanel\MenuController::class, 'index'])->name('admin_menu');
Route::get('/admin/menu/create',[\App\Http\Controllers\AdminPanel\MenuController::class, 'create'])->name('admin_menu_create');
Route::post('/admin/menu/store',[\App\Http\Controllers\AdminPanel\MenuController::class, 'store'])->name('admin_menu_store');



