<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JadwalTrainerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TrainerMemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionlistController;

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


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/register', RegisterController::class);
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/member', MemberController::class)->middleware('auth');
Route::resource('/trainer', TrainerController::class)->middleware('auth');
Route::resource('/jadwal', JadwalController::class)->middleware('auth');
Route::get('/jadwaltrainer', [JadwalTrainerController::class, 'index'])->middleware('auth');
Route::resource('/trainermember', TrainerMemberController::class)->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/checkIn', [ProfileController::class,'checkIn'])->name('checkIn');
Route::post('/checkOut', [ProfileController::class, 'checkOut'])->name('checkOut');
Route::resource('/app', AppController::class)->middleware('auth');
Route::resource('/news', NewsController::class)->middleware('auth');
Route::resource('/transaction', TransactionController::class)->middleware('auth');
Route::resource('/transactionlist', TransactionlistController::class)->middleware('auth');