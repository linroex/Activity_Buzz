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


Route::post('/ckip',function(){
    $text = Input::get('str');
    $arr = [];
    for($i = 1; $i < mb_strlen($text, 'utf-8')/90; $i++){
        $sss = mb_substr($text, $i*90,90,'utf-8');
        // if(strlen <)
        echo $sss;
        array_push($arr, CKIP::str($sss));
        // var_dump(CKIP::str($sss));
    }
    var_dump(array_sum($arr));
    return 1;
});
Route::get('/',function(){
    return View::make('index');
});
