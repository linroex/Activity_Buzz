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
Route::get('/index',function(){
    return View::make('index1');
});
Route::post('/ckip', 'ParseWord@parse');
Route::get('/notify/mail/{id}', 'Notify@mail');
Route::post('/user', 'UserAuth@checkUser'); // chceck user wheather register or not
Route::post('/register', 'UserAuth@addUser'); 
Route::get('/theme', function(){return View::make('main');} );
Route::post('/addusertag',function(){
    UserTag::add_tag(Input::get('id'),Input::get('tag'));
});
Route::get('/like',function(){
    return Response::json(ActivityTag::search_like_activity(Input::get('id')));
});
Route::get('/tag',function(){
    return Response::json((UserTag::get_tag(Input::get('id'))));
});

Route::get('/like1',function(){
    echo "<pre>";
    var_dump(ActivityTag::search_like_activity(Input::get('id')));
});
Route::get('/tag1',function(){
    echo "<pre>";
    var_dump(UserTag::get_tag(Input::get('id')));
});