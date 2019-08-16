<?php

use Illuminate\Http\Request;

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

Route::get('test', 'TestController@getTest');
Route::post('test', 'TestController@createTest');
Route::put('test', 'TestController@updateTest');
Route::delete('test', 'TestController@deleteTest');
Route::post('listTest', 'listTestController@getTest');

