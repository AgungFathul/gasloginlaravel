<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\LoginController; 

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/authadmin', [LoginController::class, 'authadmin'])->name('authadmin');
Route::post('/proses_login', [LoginController::class, 'proses_login'])->name('proses_login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [HomeController::class, 'register'])->name('register');


//crud admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:view_dashboard'], 'as' => 'admin.'], function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [HomeController::class, 'index'])->name('user.index');
    Route::post('/user', [HomeController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [HomeController::class, 'destroy'])->name('user.destroy');
    Route::get('/user/create', [HomeController::class, 'create'])->name('user.create');
});
    // Route::get('/dashboard', [HomeController::class, 'dashboard']);
    // Route::get('/user', [HomeController::class, 'index'])->name('user.index');
    // Route::post('/user', [HomeController::class, 'store'])->name('user.store');
    // Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
    // Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
    // Route::delete('/delete/{id}', [HomeController::class, 'destroy'])->name('user.destroy');
    // Route::get('/user/create', [HomeController::class, 'create'])->name('user.create');


//GasloginRoute
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/createtour', [HomeController::class, 'createtour'])->name('createtour');
Route::get('/detailtour', [HomeController::class, 'detailtour'])->name('detailtour');
Route::get('/detailtourvalo', [HomeController::class, 'detailtourvalo'])->name('detailtourvalo');
Route::get('/detaildonation', [HomeController::class, 'detaildonation'])->name('detaildonation');
Route::get('/mainblog', [HomeController::class, 'mainblog'])->name('mainblog');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/tournament', [HomeController::class, 'tournament'])->name('tournament');
Route::get('/login', [HomeController::class, 'login'])->name('login');



