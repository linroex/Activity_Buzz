<?php
class ActivityTag extends Eloquent{
    protected $table = 'activity_tag';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;
    public static function search_like_activity($user){
        $tags = UserTag::get_tag($user);
        $aid = "";
        $result = [];
        foreach ($tags as $tag) {
            $data = self::where('tag','=',$tag['tag'])->get()->toArray();
            
            if($data !== []){
                if(!strpos($aid,$data[0]['id'])){
                    array_push($result, Activity::getActivityData($data[0]['id'])[0]);
                    $aid .= $data[0]['id'] . ',';
                }

            }

        }
        var_dump($aid);
        return $result;
    }
}