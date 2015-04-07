<?php namespace Artees\Core;

use App;

trait CommandBus {

	/**
	* Execute Command
	* @param $command
	* @return mixed
	*/
	public function execute ($command)
	{
		return $this->getCommandBus()->execute($command);

	}

	/**
	* Fetch Command Bus
	* 
	* @return mixed
	*/
	public function getCommandBus()
	{
		return App::make('Laracasts\Commander\CommandBus');
	}

}