<?php namespace Artees\Registration\Events;

use Artees\Users\User;

/**
* Event raised when User Registers 
*/
class UserRegistered 
{
	public $user;
	
	function __construct(User $user) 
	{
		$this->user = $user;
	}
}