<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function () {
    return view('template.base');
});
Route::get('beranda',[HomeController::class,'showberanda']);
Route::get('produk',[ProdukController::class,'index']);
Route::get('produk/create',[ProdukController::class,'create']);
Route::post('produk',[ProdukController::class,'store']);
Route::get('produk/{produk}',[ProdukController::class,'show']);
Route::get('/{produk}/edit',[ProdukController::class,'edit']);
Route::put('produk/{produk}',[ProdukController::class,'update']);
Route::delete('produk/{produk}',[ProdukController::class,'destroy']);




Route::get('katagori',[HomeController::class,'showkatagori']);
Route::get('login',[HomeController::class,'showlogin']);
Route::get('logout',[HomeController::class,'showlogout']);
Route::get('profil',[HomeController::class,'showprofil']);


