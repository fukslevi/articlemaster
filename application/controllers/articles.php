<?php

// Show articles by ID - DONE
// Show list of all articles - DONE
// Show form for creating new article - DONE

// Show form for editind the article title and content
// Create new article 
// delete article
// Update article

class Articles_Controller extends Base_Controller {    

    public $restful = true;
    
	public function get_index()
    {
        $articles =  Article::all();
        return View::make('article.index')->with('articles', $articles);
    }   



    public function get_new($default_article = '')
    {
        return View::make('article.new')
        ->with('article', $default_article);
    }



    public function post_create() 
    {   
        $new_article = Article::create(array(
            'art_title'     => Input::get('art_title'),
            'art_content'   => Input::get('art_content')
        ));

        if ( $new_article ) {
            return Redirect::to_route('articles', $new_article->id);
        }
    }   



    public function get_show($id)
    {
        $articles = Article::where('id' , '=' ,$id)->get();
        return View::make('article.show')
        ->with('articles', $articles);
    }



    public function get_edit($id)
    {   
        $edit_article = Article::find($id);

        /* if ( is_null($edit_article) )
        {
         return Redirect::to('articles');
       } */

        return View::make('article.edit')
        ->with('edit_article', $edit_article);
    }



	public function put_update()
    {
        return "Update that article in the DB";
    }



	public function delete_destroy()
    {
         return "delete that article from the DB";
    }

}