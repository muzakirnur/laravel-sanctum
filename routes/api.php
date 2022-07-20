<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => 'auth:sanctum'], function () {

    // Kelola Category
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category', [CategoryController::class, 'create']);
    Route::put('/category/{id}/edit', [CategoryController::class, 'edit']);
    Route::get('/category/{id}/show', [CategoryController::class, 'show']);

    // Kelola Books
    Route::get('/book', [BookController::class, 'index']);
    Route::post('/book', [BookController::class, 'create']);
    Route::get('/book/{id}/show', [BookController::class, 'show']);
    Route::put('/book/{id}/update', [BookController::class, 'update']);
});

Route::post('/login', [AuthController::class, 'login']);
