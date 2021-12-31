<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'IndexController@index');
Route::get('/submit','SubmitController@index');
Route::get('/test','TestController@index');
