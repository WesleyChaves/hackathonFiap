<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Contact
Route::resource('contacts','ContactController')->middleware('auth');

//Site
Route::get('/', 'SiteController@index');
Route::get('/alunoRegulamento', 'SiteController@regulamento');
Route::get('/site', 'SiteController@index');
Route::get('/registerSite', 'SiteController@registerSite');

//Lost
Route::resource('losts','LostController')->middleware('auth');

//Found
Route::resource('founds','FoundController')->middleware('auth');