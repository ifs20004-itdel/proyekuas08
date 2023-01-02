<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DataBeasiswaController;
use App\Http\Controllers\EksternalBeasiswaController;
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


// Route::get('/{userlog}', function () {
//     return view('dashboard');
// })->name('dashboardLoggedIn');


// Login
Route::post('/login/auth',[LoginController::class,'store'])->name('login')->middleware('guest');

Route::get('/login/auth',[LoginController::class,'create'])->middleware('guest');


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/about',function(){
    return view('about');
});


Route::get('/daftarBeasiswa',function(){
    return view('daftarBeasiswa');
});

// Jenis Beasiswa
Route::get('/beasiswaInternal',function(){
    return view('jenisbeasiswa.internal');
});
Route::get('/beasiswaEksternal',
    [EksternalBeasiswaController::class,'index'])->name('beasiswaEksternal');


// Seleksi Beasiswa
Route::get('/seleksi',function(){
    return view('seleksibeasiswa.seleksi');
});


// Data Beasiswa
Route::get('dataBeasiswa/{tahun}',[DataBeasiswaController::class,'index'])->name('dataBeasiswa');
Route::post('create-data-beasiswa/{tahun}',
[DataBeasiswaController::class,'store'])->name('store-data-beasiswa');

Route::get('create-data-beasiswa/{tahun}',[
    DataBeasiswaController::class,'create'])->name('create-data-beasiswa');
Route::get('hapus-data-beasiswa/{id}/{tahun}',
[DataBeasiswaController::class,'destroy'])->name('hapus-data-beasiswa');


// Log out
Route::post('logout', LogoutController::class)->name('logout');


    // Route::middleware('guest')->group(function(){

    // });