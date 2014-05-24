<?php
class CKIP{
    public static function str(){
            
                // $infoData = ;
                
            // $str = $infoData["name"] . " " . $infoData["description"];

            // preg_match_all('#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?#si', 
                // $str, $matches);
            $str = Input::get("str");
            $str = @iconv("UTF-8","big5",$str);
                $request = cURL::newRequest('post','http://sunlight.iis.sinica.edu.tw/cgi-bin/text.cgi',['query'=>$str])
                    ->setHeader('content-type', 'application/x-www-form-urlencoded');
                $response = $request->send();
                
                preg_match("/CONTENT=\"0\.1; URL='\/uwextract\/pool\/(.*)\.html'\"/",$response,$matches);
                $url = "http://sunlight.iis.sinica.edu.tw/uwextract/show.php?type=tag&id=" . $matches[1];
                $request = cURL::newRequest('get', $url);
                $response = $request->send();
                $response=iconv("big5","utf-8",$response);
                $dom = Sunra\PhpSimple\HtmlDomParser::str_get_html($response);
                
                $str = $dom->find("pre", 0)->plaintext;
                $str = str_replace(array("-"), "", $str);
                $tmpArr = explode("　", trim($str));
                $data = [];
                foreach($tmpArr as $word){
                preg_match("/(.*)\(/",$word,$matches);
                if(isset($matches[1])) $data[] = $matches[1];
                }
                return Response::json($data);
    }
}