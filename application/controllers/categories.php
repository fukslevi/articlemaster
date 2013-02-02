<?php

class Categories_Controller extends Base_Controller {   

	public $restful = true;

	public function get_index()
    {
    	$categories = Category::all();
        return View::make('category.index')->with('categories', $categories);
    }   

}