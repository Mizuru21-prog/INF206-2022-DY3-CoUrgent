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

Route::get('/Struk', function () {
    return view('Struk',[
        "title" => "Struk"
    ]);
});
Route::get('/Produk', function () {
    return view('Produk', [
        "title" =>'Produk'
    ]);
});
Route::get('/home', function () {
    return view('home',[
        "title" => "home"
    ]);
});

