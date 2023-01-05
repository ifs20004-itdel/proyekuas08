<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DataBeasiswaController;
use App\Http\Controllers\EksternalBeasiswaController;
use App\Http\Controllers\BlogController;
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
Route::middleware('guest')->group(function(){
    Route::post('/login/auth',[LoginController::class,'store'])->name('login');
    Route::get('/login/auth',[LoginController::class,'create']);
});

Route::group(
    ['middleware'=>['auth','role']],
    function(){
        Route::get('/create-data-beasiswa/{tahun}',[
            DataBeasiswaController::class,'create'])->name('create-data-beasiswa')->middleware('role');

        Route::post('/create-data-beasiswa/{tahun}',
            [DataBeasiswaController::class,'store'])->name('store-data-beasiswa');

        Route::get('/hapus-data-beasiswa/{id}/{tahun}',
            [DataBeasiswaController::class,'destroy'])->name('hapus-data-beasiswa');

        // Blog admin
        Route::get('/create-blog',
            [BlogController::class,'create'])->name('create-blog');

        Route::post('/create-blog',
            [BlogController::class,'store'])->name('store-blog');

        // For upload an image
        Route::post("/upload",
            [BlogController::class,'upload']
        );
    }
);


// Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/about',function(){
    return view('about');
});

// Route::get('/daftarBeasiswa',function(){
//     return view('daftarBeasiswa');
// });

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

// Log out
Route::post('logout', LogoutController::class)->name('logout');

