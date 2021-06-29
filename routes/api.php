<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('login', [App\Http\Controllers\UserController::class, 'signin']);
        Route::post('signup', [App\Http\Controllers\UserController::class, 'signup']);
        Route::post('logout', [App\Http\Controllers\UserController::class, 'logout'])->middleware('auth:api');
        Route::post('password/reset', [App\Http\Controllers\UserController::class, 'resetPassword'])->middleware('auth:api');
    });
});
