<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->get('/search', 'Api\v1\SearchController@index');

Route::middleware('auth:api')->get('/types', 'Api\v1\TypeController@index');

Route::middleware('api')->post('user/register','Api\v1\UsersController@store');