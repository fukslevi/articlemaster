<?php

class User extends Basemodel {

	public function articles() {
		return $this->has_many('Article');
	}

	public static $rules = array(
		//how to grab the id of th user?
		'email'	=> 'required|email|unique:users', //??
		'password'	=> 'required|alpha_num|between:4,8|confirmed',
		'password_confirmation'	=> 'required|alpha_num|between:4,8'
	);
}