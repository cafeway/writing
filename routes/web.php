<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\ResetpasswordController;
use App\Http\Controllers\LogoutController;
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

Route::get('/home',[HomeController::class,'index'])->name('home')->middleware('auth.basic');
//login
Route::get('/',[LoginController::class,'index'])->name("login");
Route::post('/',[LoginController::class,'login']);
//register
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'register']);
//reset password
Route::get('/resetpassword',[ResetpasswordController::class,'index'])->name('resetpassword');
Route::post('/resetpassword',[ResetpasswordController::class,'Reset']);
// logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
