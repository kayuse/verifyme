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

//Route::middleware(['api_key'])->group(function () {
    Route::post('store', 'StudentController@store');
    Route::get('list', 'StudentController@lists');
    Route::get('get/{id}', 'StudentController@get');
//});
