<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;

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
//Route::resource('user',[UserController::class, '*']);

$router->prefix('user')->group(function (Router $router) {
    Route::post('/signup',[UserController::class, 'store']);
    Route::post('/update/{user}',[UserController::class, 'update']);
    Route::delete('/delete/{user}',[UserController::class, 'destroy']);
    Route::get('/find/{user}',[UserController::class, 'show']);
    Route::get('/get-all',[UserController::class, 'index']);
});