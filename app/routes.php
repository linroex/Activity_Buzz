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




Route::get('/theme', function(){return View::make('main');} );




Route::post('/addusertag',function(){
    UserTag::add_tag(Input::get('id'),Input::get('tag'));
});
Route::get('/like',function(){
    return ActivityTag::search_like_activity(Input::get('id'));
});
Route::get('/test',function(){
    var_dump( (UserTag::get_tag(Input::get('id'))));
});
Route::get('/rand',function(){
    var_dump(Activity::getRandActivity(8));
});
