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

Route::get('/', [HomeController::class, 'home']);
Route::get('/subject/konsep-aljabar', [HomeController::class, 'konsepAljabar']);
Route::get('/subject/konversi-pecahan', [HomeController::class, 'konversiPecahan']);

// Authentication Routes
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'loginPost']);

Route::get('sign-up', [SignUpController::class, 'signUp']);
Route::post('sign-up', [SignUpController::class, 'signUpPost']);

Route::post('logout', [AuthController::class, 'logout']);


Route::group(['prefix' => '/game', 'middleware' => 'auth'], function() {
    Route::get('/choose-gender', [GameController::class, 'chooseGender']);
    Route::post('/choose-gender', [GameController::class, 'setGender']);

    Route::get('/home', [GameController::class, 'home']);
    Route::get('/achievements', [GameController::class, 'achievements']);
    Route::get('/leaderboard', [GameController::class, 'leaderboard']);

    Route::get('/shop', [GameController::class, 'shop']);
    Route::post('/shop', [GameController::class, 'buy']);
});