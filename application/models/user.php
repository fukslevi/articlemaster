<?php

class User extends Eloquent 
{
	public function articles() {
		return $this->has_many('Article');
	}

	public static $user_rules = array(
		'first_name'	=> 'required|min:2',
		'last_name'	=> 'required|min:2',
		'email'	=> 'required',
		'password'	=> 'required|min:3'
		);

	public static function validate($data){
		return Validator::make($data, static::$user_rules);
	}
}