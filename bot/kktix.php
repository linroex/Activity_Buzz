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

        $source = http_get('https://kktix.com/events?page=' . $page,'')['FILE'];
        $source = return_between($source, '<ul class="event-list">', '</ul>', INCL);
        $activitys = parse_array($source, '<li class="clearfix">','</li>');
        
        foreach ($activitys as $activity) {
            $url = get_attribute($activity, 'href');
            
            $check_exist_sth->execute([$url]);
            
            if(count($check_exist_sth->fetchAll()) == 0){
                
                $activity = array(
                    'name'=>trim(strip_tags(return_between($activity, '<h2><a href="' . $url . '">', '</a></h2>', INCL))),
                    'date'=>explode('~',strip_tags(return_between($activity, '<div class="date">', '</div>', INCL)))[0],
                    'desc'=>strip_tags(return_between($activity, '<div class="description">', '</div>', INCL)),
                    'url'=>$url,
                    'img'=>str_replace(['<div class="img-holder" style="background-image: url(', ')"></div>'],'',return_between($activity, '<div class="img-holder" style="background-image: url(', ')"></div>', INCL))
                );
                var_dump($activity);
                array_push($activity_arr, $activity);

                $insert_sth->execute(array($activity['name'],$activity['desc'],date('Y:m:d',time()),$activity['url'],$activity['date'],$activity['img']));
            }else{
                die();
            }
        }

    }while(strtotime($activity_arr[9*$page]['date']) > time());
?>