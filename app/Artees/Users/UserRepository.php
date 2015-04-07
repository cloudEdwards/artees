<?php namespace Artees\Users;

class UserRepository 
{
	/** 
	* Persist a User
	*
	*@var User $user
	*
	*@return $user->save()
	*/
	public function save(User $user) {
		
		return $user->save();
	} 

}