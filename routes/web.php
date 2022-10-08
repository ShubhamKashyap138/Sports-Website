<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CoachController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\PlayerController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\SupportController;
use App\Http\Controllers\Frontend\logoutController;
use App\Http\Controllers\Frontend\PlayerRegisterController;
use App\Models\people;

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


Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/support',[SupportController::class,'index']);
Route::get('/player',[PlayerController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/coach',[CoachController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);
Route::get('/logout',[logoutController::class,'index']);
Route::post('/register',[RegisterController::class,'getData']);
Route::post('/login',[LoginController::class,'check']);
Route::get('/update',[RegisterController::class,'update']);
Route::post('/update',[RegisterController::class,'updateData']);
Route::get('/pRegister',[PlayerRegisterController::class,'Player_register']);
Route::get('/pUpdate',[PlayerRegisterController::class,'Player_update']);
Route::get('/player_data/{id}',[PlayerController::class,'allData']);
Route::get('/compare/{id}',[PlayerController::class,'compare']);
Route::get('/compare2/{id}/{id2}',[PlayerController::class,'compare2']);
Route::post('/pRegister',[PlayerRegisterController::class,'saveData']);
Route::post('/pUpdate',[PlayerRegisterController::class,'updateData']);
