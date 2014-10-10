<?php

class PostsController extends \BaseController
{
	public function index()
	{
		$posts = Post::with('user', 'category')->recent()->paginate(10);
		return View::make('posts.index', compact('posts'));
	}

	public function create()
	{
        $category_selects = Category::lists('name', 'id');
		return View::make('posts.create', compact('category_selects'));
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data = Input::only('title', 'body', 'category_id');
        $data['user_id'] = Auth::user()->id;

		$post = Post::create($data);

        $post->tag(Input::get('tags'));

		return Redirect::route('posts.index');
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}

}
