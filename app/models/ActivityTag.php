<?php
class ActivityTag extends Eloquent{
    protected $table = 'activity_tag';
    protected $guarded = array('key');
    public $primaryKey = 'id';
    public $timestamps = false;
    public static function search_like_activity($user){
        $tags = UserTag::get_tag($user);
        
        $aid = "";
        $result = [];
        foreach ($tags as $tag) {
            $data = self::where('tag','=',$tag->tag)->get()->toArray();
            // var_dump($data);
            if($data !== []){
                // var_dump(strpos($aid,$data[0]['id']));
                // var_dump($data);
                foreach ($data as $row) {

                    if(!strpos($aid,$row['id'])){
                        // echo 'ok';
                        array_push($result, Activity::getActivityData($row['id'])[0]);
                        $aid .= $row['id'] . ',';
                        // dd(Activity::getActivityData($row['id']));
                    }
                }
                

            }

        }
        // die();
        // var_dump($result);
        return $result;
    }
}