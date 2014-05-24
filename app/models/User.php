<?php
class User extends Eloquent{
    protected $table = 'user';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;

}