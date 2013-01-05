<?php

class Users_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        $users = User::all();
        return View::make('user.index')->with('users', $users);
    }

    public function get_new()
    {
        return View::make('user.new');
    }

    public function post_create()
    {
         $validation = User::validate(Input::all());


        if ($validation->fails()) {
            return Redirect::to_route('new_user')->with_errors($validation)->with_input();
        }else{
        $new_user = User::create(array(
            'first_name'    => Input::get('first_name'),
            'last_name'     => Input::get('last_name'),
            'email'         => Input::get('email'),
            'password'      => Input::get('password') 
            ));
        return Redirect::to_route('users', $new_user->id)
            ->with('message', 'User created successfully');
        }
    }

	public function get_show($id)
    {
        $users = User::where('id' , '=' ,$id)->get();
        return View::make('user.show')
        ->with('users', $users);
    }

    public function get_posts($id)
    {
        $user_posts = Article::with('user')->where('user_id' , '=' ,$id)->get();
        return View::make('user.posts')
        ->with('user_posts', $user_posts);
    }

    public function get_edit($id)
    {
        $edit_user = User::find($id);

        return View::make('user.edit')
            ->with('edit_user', $edit_user);
    }   

    public function put_update($id)
    {
        $validation = User::validate(Input::all());
        $id = Input::get('id');

        if ($validation->fails()) {
            return Redirect::to_route('edit_user', $id)->with_errors($validation)->with_input();
        }else{
        $new_user = User::update($id, array(
            'first_name'    => Input::get('first_name'),
            'last_name'     => Input::get('last_name'),
            'email'         => Input::get('email'),
            'password'      => Input::get('password') 
            ));

        return Redirect::to_route('user', $id)
            ->with('message', 'User updated successfully!');
        }
    } 

	public function delete_destroy($id)
    {
        $delete_user = User::find($id);

        if (! is_null($delete_user)){
            $delete_user->delete();
        }

        return Redirect::to_route('users')
            ->with('message', 'The user was deleted');
    }

}