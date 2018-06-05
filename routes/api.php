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

//List articles

Route::get('articles', 'ArticleController@index');

//show article

Route::get('article/{id}', 'ArticleController@show');

//add new article

Route::post('article', 'ArticleController@store');

//update article

Route::put('article/{id}', 'ArticleController@store');

//Delete article

Route::delete('article/{id}', 'ArticleController@destroy');