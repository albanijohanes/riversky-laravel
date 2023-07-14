<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::controller(PageController::class)->group(function(){
    Route::get('', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('achievement', 'achievement')->name('achievement');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
});

Route::middleware('auth')->group(function(){
    Route::get('admin', [PageController::class, 'admin'])->name('admin');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
