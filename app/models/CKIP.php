<?php
class CKIP{
    public static function str($str){
            
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
            return ($data);  // data is what u want
    }
}