<?php
class User extends Eloquent{
    protected $table = 'user';
    protected $guarded = array('key');
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function add($name, $id, $email){
        // dd(self::check($id));
        if(self::check($id) == 0){
            return self::create(['name'=>$name,'id'=>$id,'email'=>$email]);
        }else{
            return 1;
        }
    }
    public static function check($id){
        $user = User::find($id);
        if($user){
            return 1;
        }else{
            return 0;
        }
    }
}