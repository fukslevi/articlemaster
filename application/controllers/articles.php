<?php

class Articles_Controller extends Base_Controller {    

    public $restful = true;
    
    //list of all article - GET
	public function get_index()
    {
        //return View::make('article.index'); - GET
        $articles =  Article::all();
        return View::make('article.index')->with('articles', $articles);
         }   

    //show a specific article - GET
    public function get_show($id)
    {
        //$newArticle = Input::get('title');
        //$article = Article::find((int)$id);
        //$articles =  Article::where_art_title(1);

        $showArticle = Article::where_id('1')->first();
        dd($showArticle);
        return View::make('article.show');

        //return "show a specific article with id of " . $id ;
    } 

    // from for creating a new article - GET
	public function get_new()
    {
        return View::make('article.new');
    }    

    // edit a specific article - GET
    public function get_edit($id)
    {
        //$article = Article::find((int)$id);
        return "edit a specific article with id of " . $id;
    }


    // MORE


    // post a spesific article to the table - POST
    public function post_create() 
    {   
        $articleTitle = Input::get('title');

        $newArticle = Article::create(array(
            'art_title' => $articleTitle
            ));

       //return "Create that article in the DB";
            return View::make('article.index');
    }       

    // Update a spesific article in the table - PUT
	public function put_update()
    {
        return "Update that article in the DB";
    }    

    // delete a spesific article from the table - DELETE
	public function delete_destroy()
    {
         return "delete that article from the DB";
    }

}