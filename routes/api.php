<?php

use App\Http\Controllers\TaskController;
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

Route::resource('tasks', TaskController::class);
Route::get('/tasks/search/{name}', [TaskController::class, 'search']);

// Route::get('/tasks', [TaskController::class, 'index']); //displays list
// Route::post('/tasks', [TaskController::class, 'store']); //for creating


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];

    foreach ($user->tokens as $token) {
        return $user->createToken('token-name', ['server:update'])->plainTextToken;
    }

    // if ($user->tokenCan('server:update')) {
    //     //
    // }

    return $request->user()->id === $server->user_id &&
       $request->user()->tokenCan('server:update');
});
