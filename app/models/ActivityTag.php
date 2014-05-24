<?php
class ActivityTag extends Eloquent{
    protected $table = 'activity_tag';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;
    public static function search_like_activity($user){
        $tags = UserTag::get_tag($user);
        
        $result = [];
        foreach ($tags as $tag) {
            $data = self::where('tag','=',$tag['tag'])->get()->toArray();
            if($data !== []){
                array_push($result, Activity::getActivityData($data[0]['id'])[0]);
            }
        }
        return $result;
    }
}