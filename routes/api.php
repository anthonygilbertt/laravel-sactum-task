<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Modsels\PersonalAccessToken;
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

// Public
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::resource('tasks', TaskController::class);
Route::get('/tasks/search/{id}', [TaskController::class, 'show']);
Route::get('/tasks/search/{name}', [TaskController::class, 'search']);

// Protected
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/tasks', [TaskController::class, 'store']); //for creating
    Route::put('/tasks/{id}', [TaskController::class, 'update']);
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth/api')->get('/user', function () {
    return $request->user();
});
