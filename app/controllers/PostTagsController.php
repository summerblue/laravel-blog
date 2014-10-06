<?php

class PostTagsController extends \BaseController {

	/**
	 * Display a listing of posttags
	 *
	 * @return Response
	 */
	public function index()
	{
		$posttags = Posttag::all();

		return View::make('posttags.index', compact('posttags'));
	}

	/**
	 * Show the form for creating a new posttag
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posttags.create');
	}

	/**
	 * Store a newly created posttag in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Posttag::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Posttag::create($data);

		return Redirect::route('posttags.index');
	}

	/**
	 * Display the specified posttag.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$posttag = Posttag::findOrFail($id);

		return View::make('posttags.show', compact('posttag'));
	}

	/**
	 * Show the form for editing the specified posttag.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$posttag = Posttag::find($id);

		return View::make('posttags.edit', compact('posttag'));
	}

	/**
	 * Update the specified posttag in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$posttag = Posttag::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Posttag::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$posttag->update($data);

		return Redirect::route('posttags.index');
	}

	/**
	 * Remove the specified posttag from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Posttag::destroy($id);

		return Redirect::route('posttags.index');
	}

}
