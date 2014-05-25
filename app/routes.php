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

Route::get('/',function(){
    return View::make('index');
});
Route::post('/ckip', 'ParseWord@parse');
Route::get('/notify/mail/{id}', 'Notify@mail');
Route::get('/user', 'UserAuth@checkUser'); // chceck user wheather register or not
Route::get('/register', 'UserAuth@addUser'); 
Route::post('/addusertag',function(){
    // dd(Input::get('id'));
    UserTag::add_tag(Input::get('id'),Input::get('tag'));
});
Route::post('/like',function(){
    return ActivityTag::search_like_activity(Input::get('id'));
});
Route::get('/test',function(){
    var_dump(UserTag::get_tag(Input::get('id')));
});
