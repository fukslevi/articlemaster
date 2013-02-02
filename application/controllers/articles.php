<?php

// Show articles by ID - DONE
// Show list of all articles - DONE
// Show form for creating new article - DONE

// Show form for editind the article title and content - DONE
// Create new article - DONE
// delete article - DONE
// Update article - DONE

// Add article to loged in user and relate it to him



class Articles_Controller extends Base_Controller {    

    public $restful = true;
    
    // Show all articles
	public function get_index()
    {
        $articles = Article::with('user')->get();
        return View::make('article.index')->with('articles', $articles);
    }   


    // Show new form
    public function get_new()
    {
        $user = Auth::user();

        return View::make('article.new')
        ->with('user', $user);
    }

    // show article
    public function get_show($id)
    {
        $articles = Article::with('user')->where('id' , '=' ,$id)->get();
        $edit_article = Article::find($id);

        if ( is_null($edit_article) )
        {
         return Redirect::to('articles')
            ->with('message', 'The article yo\'ve been locking for does not exist');
        }
        return View::make('article.show')
        ->with('articles', $articles)
        ->with('edit_article', $edit_article);
    }


    // show form to update an article
    public function get_edit($id)
    {   
        $edit_article = Article::find($id);

        if ( is_null($edit_article) )
        {
         return Redirect::to('articles');
        }
        
        return View::make('article.edit')
        ->with('edit_article', $edit_article);
    } 

    // create new article
    public function post_create() 
    {   
        $validation = Article::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to_route('new_article')->with_errors($validation)->with_input();
        }
        else{
            $new_article = Article::create(array(
                'title'     => Input::get('title'),
                'content'   => Input::get('content'),
                'user_id'   => Input::get('user')
            ));
            
            return Redirect::to_route('articles', $new_article->id)
            ->with('message', 'Article created successfully');
        }
    }   

    // Update article
	public function put_update($id)
    {
        $validation = Article::validate(Input::all());
        $id = Input::get('id');

        if ($validation->fails()) {
            return Redirect::to_route('edit_article', $id)->with_errors($validation)->with_input();
        }else{
            article::update($id, array(
                 'title'    =>Input::get('title'),
                 'content'     =>Input::get('content')
            ));

             return Redirect::to_route('article', $id)
             ->with('message', 'Article updated successfully!');
         }
    }


    // Delete article
	public function delete_destroy($id)
    {   
        //$id = Input::get('id');
        $delete_article = Article::find($id);

        if (! is_null($delete_article)){
            $delete_article->delete();
        }

        return Redirect::to_route('articles')
            ->with('message', 'The article was deleted');
    }

}