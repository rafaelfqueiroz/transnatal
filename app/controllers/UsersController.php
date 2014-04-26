<?php

class UsersController extends BaseController {

	public function getProfile()
	{
		return View::make('pages.profile');
	}
}
