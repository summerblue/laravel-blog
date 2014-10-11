<?php

class CommentsController extends \BaseController
{
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Comment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
	   	Comment::create($data);

		return Redirect::route('posts.show', Input::get('post_id'));
	}
}
