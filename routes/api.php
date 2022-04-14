<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\InfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/','App\Http\Controllers\Api\InfoController@index')->name('api-index');
Route::any('/store','App\Http\Controllers\Api\InfoController@store')->name('api-store');
Route::delete('/{info}','App\Http\Controllers\Api\InfoController@delete')->name('api-delete');
Route::get('auth/redirect',[AuthController::class,'redirect'])->name('api/redirect');
Route::get('auth/callback',[AuthController::class,'callback'])->name('api/callback');
Route::post('auth/register',[AuthController::class,'register'])->name('api/register');
Route::post('auth/login',[AuthController::class,'login'])->name('api/login');
Route::group(['middleware' => 'jwt.auth'], function(){
    Route::get('auth/user', [AuthController::class,'user']);
  });
Route::group(['middleware' => 'jwt.refresh'], function(){
    Route::get('auth/refresh', [AuthController::class,'refresh']);
  });
