<?php


use Artees\Forms\SignInForm;

class SessionsController extends \BaseController {

	/*
	* @var SignInForm 
	*/
	private $signInForm;

	public function __construct(SignInForm $signInForm)
	{
		$this->beforeFilter('guest',['except'=>'destroy']);
		$this->signInForm = $signInForm;
	}


	/**
	 * Show the Form for Loging In
	 * the User
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// fetch the form input
		$input = Input::only('email','password');
        // if invalid, redirect back
		// validate form
		$this->signInForm->validate($input);
		// if valid, try sign in
		if(Auth::attempt($input)){
			//  redirect to statuses

			Flash::message('Welcome Back!');
			return Redirect::intended('/statuses');
		}
		
	}


	/**
	 * Logout the User
	 * 
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();	

		Flash::message('You have logged out successfully.');

		return Redirect::home();
	}



}
