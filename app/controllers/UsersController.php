<?php

class UsersController extends BaseController {

	public function getProfile()
	{
		return View::make('pages.users.profile');
	}

	public function postProfile()
	{
		return Redirect::to('index');
	}

	public function register() 
	{
		return View::make('pages.users.register');
	}
}
