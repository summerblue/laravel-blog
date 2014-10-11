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

        Flash::success(lang('Operation succeeded.'));
		return Redirect::route('posts.show', [Input::get('post_id'), '#comment-input']);
	}

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        Comment::destroy($id);
        Flash::success(lang('Operation succeeded.'));
        return Redirect::route('posts.show', $comment->post_id);
    }
}
