<?php

use Artees\Forms\RegistrationForm;
use Artees\Registration\RegisterUserCommand;
use Artees\Core\CommandBus;



class RegistrationController extends \BaseController {

	use CommandBus;

	/**
	*@var RegistratomForm
	*/
	private $registrationForm;

	/**
	 *  Constructor Function to Initialize class
	 * 
	 *@param CommandBus $commandBus
	 *
	 *@param RegistrationForm $registrationForm
	 *
	  */
	function __construct(RegistrationForm $registrationForm) 
	{
		
		$this->registrationForm = $registrationForm;

	}



	/**
	 * Show the form for creating 
	 * a new profile.
	 *
	 * @return Response registration page
	 */
	public function create()
	{
		return View::make('registration.index');
	
	}


	/**  Create  New Artees User
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->registrationForm->validate(Input::all());

		extract(Input::only('username','email','password'));

		$command = new RegisterUserCommand($username, $email, $password);

		$user = $this->execute($command);

		Auth::login($user);

		return Redirect::home();
	}



}
