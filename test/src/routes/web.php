<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'Anindita\Test\Http\Controllers'], function(){

Route::get('test','TestController@index');
Route::post('test','TestController@submit');


});
