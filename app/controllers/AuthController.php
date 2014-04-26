<?php

class AuthController extends BaseController {

	public function getLogin()
	{
		return View::make('pages.login');
	}

	public function postLogin()
	{
		return Redirect::to('index');
	}

	public function logout()
	{
		return Redirect::to('/');
	}

}
