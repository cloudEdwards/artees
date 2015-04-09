<?php namespace Artees\Registration;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Artees\Users\UserRepository;
use Artees\Users\User;

class RegisterUserCommandHandler implements CommandHandler {

	use DispatchableTrait;

	/**
	*	UserRepository
	*/
	protected $repository;

	/**
	 *@param RegistrationForm $registrationForm
	  */
	function __construct(UserRepository $repository) 
	{
		$this->repository = $repository;
	}


	/**
	* Handle The Command
	*
	*@param $command
	*@return mixed
	*
	*/

	public function handle ($command) {
		
		$user = User::register(
			$command->username, 
			$command->email, 
			$command->password
		);

		$this->repository->save($user);

		$this->dispatchEventsFor($user);

		return $user;
	}




}