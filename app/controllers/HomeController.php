<?php

use Transnatal\Interfaces\NewsRepositoryInterface;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	private $newsRepository;

	public function __construct(NewsRepositoryInterface $newsRepository)
	{
		$this->newsRepository = $newsRepository;
	}

	public function index()
	{
		return View::make('pages.index')->with('news', $this->newsRepository->allAvaliable());
	}

}
