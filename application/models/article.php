<?php

class Article extends Eloquent 
{
	public function user() {
		return $this->belongs_to('User');
	}

	public static $article_rouls = array(
			'title' => 'required|min:2',
			'content' => 'required|min:10'
		);

	public static function validate($data){
		return Validator::make($data, static::$article_rouls);
	}
}