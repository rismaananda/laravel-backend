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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/message', function() {
    return "Hello Risma from API";
});

Route::get('/student-list', 'StudentController@list' );
Route::post('/student-create', 'StudentController@create' );
Route::get('/student/{id}/edit', 'StudentController@showById' );
Route::post('/student-update/{id}', 'StudentController@updateById' );
Route::post('/student-delete/{id}', 'StudentController@deleteById' );