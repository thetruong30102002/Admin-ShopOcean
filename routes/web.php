<?php

use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
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
Route::get('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index')->middleware('authen');
Route::get('admin',[AuthController::class,'index'])->name('auth.admin')->middleware('login');
Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');
Route::post('login',[AuthController::class,'login'])->name('auth.login')->middleware('login');
Route::get('/',[DashboardController::class,'index'])->name('home')->middleware('login')->middleware('authen','login');


/*AJAX
*/
Route::get('user/ajax/location/getLocation',[LocationController::class,'getLocation'])->name('user.ajax.location.getLocation')->middleware('authen');
/*
Users
*/
Route::get('user/index',[UserController::class,'index'])->name('user.index')->middleware('authen');
Route::get('user/create',[UserController::class,'create'])->name('user.create')->middleware('authen');
Route::get('user/update',[UserController::class,'update'])->name('user.update')->middleware('authen');
Route::get('user/destroy',[UserController::class,'destroy'])->name('user.destroy')->middleware('authen');