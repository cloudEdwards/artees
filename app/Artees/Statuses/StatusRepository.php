<?php namespace Artees\Statuses;

use Artees\Users\User;

class StatusRepository 
{
	/**
	* Persists Status and associates it
	*  with User_id
	*@return User
*/
	public function save(Status $status, $userId)
	{
		return User::findOrFail($userId)
		->statuses()
		->save($status);

	}


	/**
	* Returns all Statuses related to User
	* 
	* @param User $user
	* @return mixed
	*/
	public function getAllForUser(User $user)
	{
	
		return $user->statuses()->get();
	}
}