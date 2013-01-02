<?php

// Show articles by ID - DONE
// Show list of all articles - DONE
// Show form for creating new article - DONE

// Show form for editind the article title and content - DONE
// Create new article - DONE
// delete article - 
// Update article

class Articles_Controller extends Base_Controller {    

    public $restful = true;
    
    // Show all articles
	public function get_index()
    {
        $articles =  Article::all();
        return View::make('article.index')->with('articles', $articles);
    }   


    // Show new form
    public function get_new()
    {
        return View::make('article.new');
    }


    // create new article
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


    // show article
    public function get_show($id)
    {
        $articles = Article::where('id' , '=' ,$id)->get();
        return View::make('article.show')
        ->with('articles', $articles);
    }


    // show form to update an article
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


    // Update article
	public function put_update($id)
    {
     $id = Input::get('id');

     article::update($id, array(
         'art_title'    =>Input::get('art_title'),
         'art_content'     =>Input::get('art_content')
         ));

     return Redirect::to_route('article', $id)
     ->with('message', 'Article updated successfully!');
    }


    // Delete article
	public function delete_destroy($id)
    {
        $id = Input::get('id');
        article::delete($id);

        return Redirect::to_route('articles')
        ->with('message', 'Article deleted successfully!');
    }

}