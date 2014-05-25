<?php
class UserTag extends Eloquent{
    protected $table = 'user_tag';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function get_tag($id){
        return self::where('id','=',$id)->get()->toArray();
    }
    public static function add_tag($id,$tags = []){
        if($id == '') return 0;
        foreach ($tags as $tag) {
            // self::create(['id'=>intval($id),'tag'=>$tag]);
            dd(intval($id));
        }
        return 1;
    }
}