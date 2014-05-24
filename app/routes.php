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


Route::get('/ckip',function(){
    // 等待夏處理
    $str = '輕井澤吃好飽六分鐘到城區考完多益有陌生人載我';
    $request = cURL::newRequest('post','http://www.fukuball.com/ckip-client/ckip-process',['paragraph'=>$str]);
    $request = $request->setHeader('content-type', 'application/x-www-form-urlencoded');
    $response = $request->send();
    $dom = Sunra\PhpSimple\HtmlDomParser::str_get_html($response->body);
    $result = $dom->find('pre')[0]->plaintext;
    $result = str_replace(' ', '', $result);

    $data = [];
    $tmp = [];

    $result = explode("[term]", $result);
    for($i =1; $i< count($result); $i++){
    	    preg_match("/=>(.*)\[tag\]/U", $result[$i], $tmp);
	    $data[] = $tmp[1];
    }
    return var_dump($data);  // data is what u want

});
Route::get('/',function(){
    return View::make('index');
});
