<?php namespace Artees\Statuses;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Artees\Statuses\StatusRepository;
use Artees\Statuses\Status;


/**
* 
*/
class PublishStatusCommandHandler implements CommandHandler
{
	use DispatchableTrait;
	
	protected $statusRepository;

	/**
	* @param StatusRepository $statusRepository
	*/
	function __construct(StatusRepository $statusRepository)
	{
		$this->statusRepository = $statusRepository;

	}


	/**
	* Handle The Command
	*
	*@param $command
	*@param $userId
	*@return mixed
	*/
	public function handle ($command) {

		$status = Status::publish($command->body);

		$this->statusRepository->save($status, $command->userId);
		
		$this->dispatchEventsFor($status);

		return $status;
	}
}