<?php
namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{

	/**
	* Name Goes Here
	*
	* @var varName
	* @param paramName
	* @return mixed
	*/
	public function signIn()
	{
		$email = 'foo@example.com';
		$password = 'foo';

		$this->haveAnAccount(compact('email','password'));

		$I = $this->getModule('Laravel4');

		$I->amOnPage('/login');
		$I->fillField('email', $email);
		$I->fillField('password', $password);
		$I->click('Sign In');
	}

	/**
	* Creates Dummy Test Account
	*
	* @param Array overrides
	*/
	public function haveAnAccount($overrides = [])
	{
		return $this->have('Artees\Users\User', $overrides);
	}


	/**
	* post status functional test
	* 
	* @param Array override 
	*/
	function postAStatus($body)
	{
		$I = $this->getModule('Laravel4');
		
		$I->fillField('publish', $body);
		$I->click('Post Status');

		//$this->have('Artees\Statuses\Status', $overrides);
	
	}

	/**
	* Fetches a model with dummy data
	* for testing 
	* 
	* @param Eloquent model
	* @param Array overrides
	* @return model with overrrides
	*/
	public function have($model, $overrides = [])
	{
		return TestDummy::create($model, $overrides);	
	}
}
