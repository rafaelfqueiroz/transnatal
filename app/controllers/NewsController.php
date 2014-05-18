<?php

use Transnatal\Interfaces\NewsRepositoryInterface;
use Transnatal\Services\Validation\NewsValidator;
use Transnatal\Interfaces\UserRepositoryInterface;

class NewsController extends BaseController {

	private $validator;
	private $newsRepository;
	private $userRepository;

	public function __construct(NewsValidator $validator, NewsRepositoryInterface $newsRepository, UserRepositoryInterface $userRepository)
	{
		$this->validator = $validator;
		$this->newsRepository = $newsRepository;
		$this->userRepository = $userRepository;
	}

	public function index()
	{
		return View::make('pages.news.index')->with('news', $this->newsRepository->all());
	}

	public function create()
	{
		return View::make('pages.news.create');
	}
	
	public function edit($id)
	{
		$bd_news = $this->newsRepository->find($id);
		return View::make('pages.news.edit')->with('news', $bd_news);
	}

	public function show($id)
	{
		return Redirect::back();
	}

	public function store()
	{
		if (!$this->validator->validate(Input::all()))
		{
			$errors = $this->validator->getErrors();

			return Redirect::back()->with('errors', $errors)->withInput();
		}
		else
		{
			if ($this->newsRepository->save(Input::all()))
			{
				return Redirect::route('news.create')->with('messages', 'Notícia cadastrada com sucesso.');
			}
			else
			{
				return Redirect::back()->with('errors', 'Erro ao tentar cadastrar a notícia, por favor tente novamente.')->withInput();
			}
		}
	}


	public function update($id)
	{
		if (!$this->validator->validate(Input::all()))
		{
			$errors = $this->validator->getErrors();
			
			return Redirect::back()->with('errors', $errors)->withInput();
		}
		else
		{
			if ($this->newsRepository->update($id, Input::all()))
			{
				return Redirect::route('news.index')->with('messages', 'Informações da notícia alteradas com sucesso.');
			}
			else
			{
				return Redirect::back()->with('errors', 'Erro ao tentar alterar informações da notícia, por favor tente novamente')->withInput();
			}
		}
	}

	public function destroy($id)
	{
		$this->newsRepository->delete($id);
		return Redirect::route('news.index')->with('messages', 'Notícia removido com sucesso.');
	}
}
