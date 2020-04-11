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

/**
* Module Users
*/
Route::apiResource("users","\App\Modules\General\Users\Controllers\UsersController");
/**
* Module Users
*/
Route::apiResource("findUsers","\App\Modules\General\Users\Controllers\UsersController");
/**
* Module Contacts
*/
Route::apiResource("contacts","\App\Modules\General\Contacts\Controllers\ContactsController");