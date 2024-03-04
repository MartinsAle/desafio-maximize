<?php

use App\Http\Controllers\Web\WebPostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebPostsController::class, 'index'])->name('post-index');
Route::get('/post', [WebPostsController::class, 'show'])->name('post-single');
Route::get('/post-create', [WebPostsController::class, 'create'])->name('post-create');
Route::post('/publish-post', [WebPostsController::class, 'publishPost'])->name('publish-post');
