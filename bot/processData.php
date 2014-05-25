<?
include('src/LIB_http.php');
include('src/LIB_parse.php');
$db = new PDO('mysql:dbname=activity_buzz;host=127.0.0.1;','activity_buzz','Gws37pVFjFABwcDZ');
$sth = $db->prepare('select * from `activity`');
$sth->execute();
$allActivity = [];
echo "<pre>";
while($data = $sth->fetch()){
	$tmpStr = json_encode(array("info"=>array("name"=>strProcess($data["name"]), "description"=>strProcess($data["description"]))), JSON_UNESCAPED_UNICODE);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://localhost/~xia/hackNTU/Activity_Buzz/public/index.php/ckip");
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $tmpStr);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		        'Content-Length: ' . strlen($tmpStr))                                                                       
		);
        $result = curl_exec($ch); 	
	$result = json_decode($result);

	$count = [];
	if(count($result)==0) continue;
	foreach($result as $val){
		if(mb_strlen($val, "utf-8") > 1){
			if(array_key_exists($val, $count))
			       	$count[$val]++;
			else 
				$count[$val] = 1;
		}
	}
	uasort($count, 'cmp');
	$count = array_flip($count);
	$popNum = ceil(count($count)/3);
	
	$insertsth = $db->prepare('INSERT INTO `activity_buzz`.`activity_tag` VALUES (NULL, :actId, :tag);');
	$insertsth->bindValue(":actId", $data["id"]);
	$insertsth->bindParam(":tag", $tag);
	if(count($count) > 3){
		for($i=0; $i<$popNum; $i++){
			$tag = array_pop($count);
			$insertsth->execute();
		}
	}
	$allActivity[] = $count;
}
print_r($allActivity);
function strProcess($str){
	$str = str_replace(array(" ", "\n", "<br>", "\r"), "", $str);
	return $str;
}

// Comparison function
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
?>
