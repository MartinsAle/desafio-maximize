<?php

use App\Http\Controllers\Api\PostsController;
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

//Posts Route
Route::namespace('Api')->prefix('posts')->group(function () {
    Route::get('/', [PostsController::class, 'index']);
    Route::get('/{id}', [PostsController::class, 'show']);
    Route::post('/', [PostsController::class, 'save']);
    Route::put('/{id}', [PostsController::class, 'update']);
    Route::delete('/{id}', [PostsController::class, 'delete']);
});
