<?php
    include('src/LIB_http.php');
    include('src/LIB_parse.php');

    $activity_arr = array();
    $page = 0;
    $db = new PDO('mysql:dbname=activity_buzz;host=127.0.0.1;','activity_buzz','Gws37pVFjFABwcDZ');
    $insert_sth = $db->prepare('insert into activity (name,description,created_at,url,date,img) values (?,?,?,?,?,?)');
    $check_exist_sth = $db->prepare('select url from activity where url = ?');
    do{
        $page++;

        $source = http_get('http://www.accupass.com/search?page=' . $page,'')['FILE'];

        $activitys = parse_array($source, '<div class="span8 artRightBox">','</div>');
        $image = parse_array($source, '<div class="span4 imgLeftBox">','</div>');
        // var_dump($image);
        // die();
        $ii = 0;
        foreach ($activitys as $activity) {
            $url = 'http://www.accupass.com' . get_attribute($activity, 'href');
            
            $check_exist_sth->execute([$url]);
            
            if(count($check_exist_sth->fetchAll()) == 0){
                $activity = array(
                    'name'=>trim(strip_tags(return_between($activity, '<a href="' . get_attribute($activity, 'href') . '" class="ellipsis fix_link tit">', '</a>', INCL))),
                    'date'=>trim(strip_tags(return_between($activity, '<dd>', '</dd>', INCL))),
                    'desc'=>trim(strip_tags(return_between($activity, '<h4 class="ellipsis ellipsis_all">', '</h4>', INCL))),
                    'url'=>$url,
                    'img'=>trim(str_replace(['data-original="', '?'], '', return_between($image[$ii], 'data-original=', '?', INCL)))
                );
                array_push($activity_arr, $activity);
                var_dump($activity);
                $insert_sth->execute(array($activity['name'],$activity['desc'],date('Y:m:d',time()),$activity['url'],$activity['date'],$activity['img']));
            }else{
                die();
            }
            $ii++;
        }

    }while(@$activity_arr[$page*10-1]['url'] != '');
?>