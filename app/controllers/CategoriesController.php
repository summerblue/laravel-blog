<?php

class CategoriesController extends \BaseController
{
	public function show($slug)
	{
        $category = Category::whereSlug($slug)->first();
		$posts = $category->posts()->paginate(10);

		return View::make('posts.index', compact('category', 'posts'));
	}
}
