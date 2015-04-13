<?php namespace Artees\Statuses\Events;


/**
* 
*/
class NewStatusWasPublished 
{
	public $body;

	function __construct($body)
	{
		$this->body = $body;
	}
}