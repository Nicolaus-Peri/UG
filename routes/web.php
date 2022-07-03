<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\TrainerMemberController;

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


Route::get('/', [LoginController::class, 'index']);
Route::resource('/register', RegisterController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/member', MemberController::class);
Route::resource('/trainer', TrainerController::class);
Route::resource('/jadwal', JadwalController::class);
Route::resource('/trainermember', TrainerMemberController::class);