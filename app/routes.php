<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::post('/ckip', 'ParseWord@parse');
Route::post('/ckip_u', 'ParseWord@parse_u');
Route::get('/',function(){
    return View::make('index');
});

Route::get('/test',function(){
    var_dump(ActivityTag::search_like_activity('100001186452301'));
});
