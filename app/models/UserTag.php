<?php
class UserTag extends Eloquent{
    protected $table = 'user_tag';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function get_tag($id){
        $data = DB::select("SELECT tag,count(tag) as num FROM user_tag WHERE id = ? and char_length(tag) >= 2 group by tag order by num desc limit 20",[intval($id)]);
        return $data;
    }
    public static function add_tag($id,$tags = []){
        if($id == '') return 0;
        foreach ($tags as $tag) {
            self::create(['id'=>intval($id),'tag'=>$tag]);
        }
        return 1;
    }
}