<?php namespace Artees\Registration;

use Laracasts\Commander\CommandHandler;
use Artees\Users\UserRepository;
use Artees\Users\User;

class RegisterUserCommandHandler implements CommandHandler {

	protected $repository;

	/**
	 *  Constructor Function to Initialize class
	 *@param CommandBus $commandBus
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

		return $user;
	}




}