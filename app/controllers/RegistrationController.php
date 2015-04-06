<?php

class RegistrationController extends \BaseController {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating 
	 * a new profile.
	 *
	 * @return Response registration page
	 */
	public function create()
	{
		return View::make('registration.index');
	
	}


	/**  Create  New Artees User
	 * 
	 *
	 * @return Response
	 */

	public function store()
	{

		/* TODO: 
			* Sanitize Input 
			* Validate Input
			* Create Encrypted Password
			* Store New User to DataBase 
		*/

		$input = Input::all();

		$user = e($input['user']);
		$email = e($input['mail']);
		$password = Hash::make(
				e($input['pswrd']));

	
		$user = User::create([
			'username'=>$user, 
			'email'=>$email, 
			'password'=> $password
		]);


		Auth::login($user);

		return Redirect::home();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
