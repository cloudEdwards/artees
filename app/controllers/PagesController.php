<?php

class PagesController extends \BaseController {

	/**
	 * Display Home Page
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('pages.home');
	}




}
