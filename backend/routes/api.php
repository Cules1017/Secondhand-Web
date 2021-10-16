<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/signin', 'App\Http\Controllers\UserController@create');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('/users', UserController::class);
});
// 
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
