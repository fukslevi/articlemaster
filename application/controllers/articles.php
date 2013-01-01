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
        $articles = Article::where('id' , '=' ,$id)->get();
        return View::make('article.show')
        ->with('articles', $articles);
    } 

    // show from for creating a new article - GET
	public function get_new($default_article = '')
    {
        return View::make('article.new')
        ->with('article', $default_article);
    }

    // edit a specific article - GET
    public function get_edit($id)
    {   
        //$edit_article = Article::where('id', '=', $id)->get();
        //$edit = Article::load($edit_article);

        $edit_article = Article::find($id);

        //if ( !$edit_article ) return Redirect::to_route('');
        //return $this->get_new(array($edit_article->art_content));
        return View::make('article.edit');
        
        //return "edit a specific article with id of " . $id;   
    }


    // MORE


    // create a spesific article to the table - POST
    public function post_create() 
    {   
        $new_article = Article::create(array(
            'art_title'     => Input::get('art_title'),
            'art_content'   => Input::get('art_content')
            ));

        if ( $new_article ) {
            return Redirect::to_route('articles', $new_article->id);
        }else{
            return "Sorry.. there was a problem";
        }
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