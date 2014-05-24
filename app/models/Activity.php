<?php
class Activity extends Eloquent{
    protected $table = 'activity';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function getRandActivity($num){
        $result = [];
        $start = rand(4201,4786);
        for($i = 0; $i < $num; $i++){
            $activity_data = self::where('id','=',$start+$i)->get()->toArray();
            array_push($result, $activity_data);
        }
        return $result;
    }
    public static function getActivityData($id){
        return self::where('id','=',$id)->get()->toArray();
    }
}