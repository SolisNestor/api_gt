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

Route::post('login','Api\LoginController@login');

Route::middleware('auth:api')->group(function () {
    Route::get('promotion/list', 'Api\PromotionListController@index');
    Route::get('promotion/{id}', 'Api\PromotionController@index');
});
