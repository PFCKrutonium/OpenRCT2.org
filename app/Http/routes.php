<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('download', 'DownloadController@index');
Route::get('download/latest/{identifier}', 'DownloadController@showLatest');
Route::get('download/{gitBranch}/{gitHashShort}', 'DownloadController@show');