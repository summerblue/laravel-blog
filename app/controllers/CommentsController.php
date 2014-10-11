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
	   	$comment = Comment::create($data);

        $comment->post->increment('comments_count', 1);

        Flash::success(lang('Operation succeeded.'));
		return Redirect::route('posts.show', [$comment->post->id, '#comment-input']);
	}

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        Comment::destroy($id);
        Flash::success(lang('Operation succeeded.'));
        return Redirect::route('posts.show', $comment->post_id);
    }
}
