<?php

class BaseController extends Controller {

	public function __construct()
    {

    }

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}

        View::share('currentUser', Auth::user());
	}

}
