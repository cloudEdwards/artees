<?php

namespace Artees\Statuses;

use Eloquent;
use Laracasts\Commander\Events\EventGenerator;
use Artees\Statuses\Events\NewStatusWasPublished;

/**
* A Status Database Model 
*/
class Status extends Eloquent
{

	use EventGenerator;

	protected $fillable = ['body'];

	/**
	* Publishes a new Status
	*
	* @param body
	* @return static
	*/
	static public function publish($body)
	{
		$status = new static(compact('body'));

		$status->raise(new NewStatusWasPublished($body));

		return $status;
	}


	/**
	* A Status belongs to a User 
	*
	* @return mixed
	*/	
	public function user()
	{
		return $this->belongsTo('Artees\Users\User');
	}	

}