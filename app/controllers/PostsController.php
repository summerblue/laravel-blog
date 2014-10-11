<?php

class PostsController extends \BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->beforeFilter('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$posts = Post::with('user', 'category')->recent()->paginate(10);
		return View::make('posts.index', compact('posts'));
	}

	public function create()
	{
        $category_selects = Category::lists('name', 'id');
		return View::make('posts.create_edit', compact('category_selects'));
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

		return Redirect::route('posts.show', $post->id);
	}

	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show', compact('post'));
	}

	public function edit($id)
	{
        $post = Post::find($id);
        $category_selects = Category::lists('name', 'id');
        return View::make('posts.create_edit', compact('category_selects', 'post'));
	}

	public function update($id)
	{
		$post = Post::findOrFail($id);
		$validator = Validator::make($data = Input::all(), Post::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$post->update($data);

        $post->retag(Input::get('tags'));

		return Redirect::route('posts.index');
	}

	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}

}
