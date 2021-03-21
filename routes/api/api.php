<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\http\Resources\UserCollection;

Route::get('/payment', 'App\Http\Controllers\PayOrderController@store');
Route::get('/channel', 'App\Http\Controllers\ChannelController@index');
Route::get('/post', 'App\Http\Controllers\PostController@index');

Route::prefix('/user')->group(function () {
    Route::post('/login', 'App\Http\Controllers\Api\LoginController@login');
    Route::middleware('auth:api')->get('/all', 'App\Http\Controllers\Api\UserController@index');
    Route::get('/json', function () {
        return new UserCollection(User::all());
    });
});
