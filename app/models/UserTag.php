<?php
class UserTag extends Eloquent{
    protected $table = 'user_tag';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function get_tag($id){
        return self::where('id','=',$id)->get()->toArray();
    }
}