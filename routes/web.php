<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function () {
    return view('tasks');
});


Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});


// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration Routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
