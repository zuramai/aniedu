<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\GameController;


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

// Front page
Route::get('/', [HomeController::class, 'home']);
Route::get('/about-and-contact', [HomeController::class, 'aboutAndContact']);
Route::get('/dasar-aljabar', [HomeController::class, 'dasarAljabar']);
Route::get('/konversi-pecahan', [HomeController::class, 'konversiPecahan']);

// 
Route::get('/subject/konsep-aljabar', [HomeController::class, 'konsepAljabar']);
Route::get('/subject/konversi-pecahan', [HomeController::class, 'konversiPecahan']);

// Authentication Routes
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginPost']);

Route::get('sign-up', [SignUpController::class, 'signUp'])->name('register');
Route::post('sign-up', [SignUpController::class, 'signUpPost']);

Route::post('logout', [AuthController::class, 'logout']);


Route::group(['prefix' => '/game', 'middleware' => 'auth'], function() {
    Route::get('/choose-gender', [GameController::class, 'chooseGender'])->name('game.chooseGender');
    Route::post('/choose-gender', [GameController::class, 'setGender']);

    Route::get('/home', [GameController::class, 'home'])->name('game.home');
    Route::get('/achievements', [GameController::class, 'achievements'])->name('game.achievement');
    Route::get('/leaderboard', [GameController::class, 'leaderboard'])->name('game.leaderboard');

    Route::get('/shop', [GameController::class, 'shop'])->name('game.shop');
    Route::post('/shop', [GameController::class, 'buy'])->name('game.buy');
});