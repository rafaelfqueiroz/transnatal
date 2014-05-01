<?php
use Transnatal\Interfaces\ClientRepositoryInterface;
use Transnatal\Services\Validation\ClientValidator;

class ClientsController extends BaseController {

	private $validator;
	private $addressValidator;
	private $clientRepository;

	public function __construct($validator, $clientRepository, $addressValidator)
	{
		$this->validator = $validator;
		$this->clientRepository = $clientRepository;
		$this->addressValidator = $addressValidator;
	}

	public function store()
	{
		if (!$this->validator->validate(Input::all()) && $this->addressValidator->validate(Input::all()))
		{
			return Redirect::back()->with('errors', $this->validator->getErrors())->withInput();
		}
		else
		{
			if ($this->clientRepository->save(Input::all()))
			{
				return Redirect::to('clients/register')->with('messages', 'Cliente cadastrado com sucesso.');
			}
			else
			{
				return Redirect::back()->with('errors', 'Erro ao tentar cadastrar cliente, por favor tente novamente.')->withInput();
			}
		}
	}

	public function register()
	{
		return View::make('pages.clients.register');
	}
}