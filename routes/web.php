<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru\GuruController;
use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\Admin\PengajarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!`
|
*/

Route::get('/',[LandingpageController::class,'index'])->name('/');

Auth::routes();

//for siswa or user
Route::prefix('siswa')->name('siswa.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.siswa.login')->name('login');
        Route::view('/register','dashboard.siswa.register')->name('register');
        Route::post('/create',[SiswaController::class,'create'])->name('create');
        Route::post('/check',[SiswaController::class,'check'])->name('check');
    });
    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.siswa.home',[
            "title" => "Home"
        ])->name('home');
        Route::post('/logout',[SiswaController::class,'logout'])->name('logout');
    });
});

// for admin 
Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware('auth:admin','PreventBackHistory')->group(function(){
        Route::view('/home','dashboard.admin.home',[
            "title" => "Home"
        ])->name('home');
        Route::post('/logout',[Admincontroller::class,'logout'])->name('logout');
    });
});
    Route::resource('pengajars',PengajarController::class)->middleware('auth:admin');


//for guru
Route::prefix('guru')->name('guru.')->group(function(){

    Route::middleware(['guest:guru','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.guru.login')->name('login');
        Route::view('/register','dashboard.guru.register')->name('register');
        Route::post('/create',[GuruController::class,'create'])->name('create');
        Route::post('/check',[GuruController::class,'check'])->name('check');
    });

    Route::middleware(['auth:guru','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.guru.home',[
            "title" => "Home"
        ])->name('home');
        Route::post('/logout',[GuruController::class,'logout'])->name('logout');
    });

});