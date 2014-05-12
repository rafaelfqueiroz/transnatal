<?php

class AuthController extends BaseController {

	public function getLogin()
	{
		return View::make('pages.login');
	}

	public function postLogin()
	{
		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			return Redirect::intended('index');
		}
	}

	public function logout()
	{
		return Redirect::to('/');
	}

}
