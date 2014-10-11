<?php

class TagsController extends \BaseController
{
	public function show($slug)
	{
        $tag = Tag::whereNormalized($slug)->first();
        $posts = $tag->posts();

        return View::make('posts.index', compact('tag', 'posts'));
	}
}
