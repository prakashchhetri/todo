<?php

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
Route::get('task/completed', 'App\Http\Controllers\TaskController@completed');
Route::resource('task', 'App\Http\Controllers\TaskController');
Route::patch('task/{id}/complete', 'App\Http\Controllers\TaskController@complete');
