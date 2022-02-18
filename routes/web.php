<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Siswa\SiswaController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('siswa')->name('siswa.')->group(function(){
    Route::middleware(['guest'])->group(function(){
        Route::view('/login','dashboard.siswa.login')->name('login');
        Route::view('/register','dashboard.siswa.register')->name('register');
        Route::post('/create',[SiswaController::class,'create'])->name('create');
        Route::post('/check',[SiswaController::class,'check'])->name('check');
    });
    Route::middleware(['auth'])->group(function(){
        Route::view('/home','dashboard.siswa.home')->name('home');
    });
});
