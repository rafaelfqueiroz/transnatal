<?php
	class ClientsController extends BaseController {

	public function __constructor()	{}

	public function register()
	{
		return View::make('pages.clients.register');
	}
}