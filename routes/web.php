<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\auth_admin\auth_log;
use App\Http\Controllers\main_activity;
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

Route::get('adminlog', [auth_log::class, 'showLogin'])->name('adminlog');
Route::post('actionLogin', [auth_log::class, 'actionLogin'])->name('actionLogin');


Route::get('adminreg', [auth_log::class, 'showRegister'])->name('adminreg');
Route::post('actionRegister', [auth_log::class, 'actionRegister'])->name('actionRegister');

Route::get('Struk', [main_activity::class, 'strukView']);
Route::get('Produk', [main_activity::class, 'productView']);

Route::get('home', [main_activity::class, 'homeView'])->name('home')->middleware('auth');
Route::post('actionlogout', [auth_log::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/', [main_activity::class, 'landing'])->name('landing');

