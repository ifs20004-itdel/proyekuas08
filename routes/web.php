<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('dashboard');
});

Route::post('/',[LoginController::class,'store'])->name('login');

Route::get('/login/auth',[LoginController::class,'create']);


Route::get('/about',function(){
    return view('about');
});

Route::get('/seleksi',function(){
    return view('seleksi');
});
Route::get('/daftarBeasiswa',function(){
    return view('daftarBeasiswa');
});