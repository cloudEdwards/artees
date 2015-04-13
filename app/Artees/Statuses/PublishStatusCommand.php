<?php

namespace Artees\Statuses;

/**  
* Publishes a Status post from member
*@var body
*/

class PublishStatusCommand 
{
	public $body;
	public $userId;
	
	function __construct($body, $userId)
	{
		$this->body = $body;
		$this->userId = $userId;
	}
}

