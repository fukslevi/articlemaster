<?php

class Article extends Eloquent 
{
	public static $article_rouls = array(
			'art_title' => 'required|min:2',
			'art_content' => 'required|min:10'
		);

	public static function validate($data){
		return Validator::make($data, static::$article_rouls);
	}
}