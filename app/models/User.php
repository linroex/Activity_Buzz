<?php
class User extends Eloquent{
    protected $table = 'user';
    protected $guarded = array('key');
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function add($name, $id, $email){
        return self::create(['name'=>$name,'id'=>$id,'email'=>$email]);
    }
}