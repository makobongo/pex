<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/24_volumes', function (){
//    return['msg' => 'success'];
//});
Route::get('/24_volumes', 'App\Http\Controllers\MainController@volumes');
Route::get('/ticker', 'App\Http\Controllers\MainController@ticker');
