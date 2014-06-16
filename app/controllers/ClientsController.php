<?php
use Transnatal\Interfaces\ClientRepositoryInterface;
use Transnatal\Services\Validation\ClientValidator;
use Transnatal\Services\Validation\AddressValidator;

class ClientsController extends BaseController {

	protected $validator;
	protected $addressValidator;
	protected $clientRepository;

	public function __construct(ClientValidator $validator, ClientRepositoryInterface $clientRepository, AddressValidator $addressValidator)
	{
		$this->validator = $validator;
		$this->clientRepository = $clientRepository;
		$this->addressValidator = $addressValidator;
	}

	public function index()
	{
		return View::make('pages.clients.index')->with('clients', $this->clientRepository->all());
	}

	public function create()
	{
		return View::make('pages.clients.create');
	}

	public function edit($id)
	{
		$bd_client = $this->clientRepository->find($id);
		return View::make('pages.clients.edit')->with('client', $bd_client);
	}

	public function show($id)
	{
		return Redirect::back();
	}

	public function store()
	{
		// if (!$this->validator->validate(Input::all()) && !$this->addressValidator->validate(Input::all()))
		// {
		// 	$errors = $this->validator->getErrors();
		// 	$addressErrors = $this->addressValidator->getErrors();
			
		// 	$errors->merge($addressErrors);
		// 	return Redirect::back()->with('errors', $errors)->withInput();
		// }
		// else
		// {
			//if ($this->clientRepository->save(Input::all()))
			// {
				$this->clientRepository->save(Input::all());
				return Redirect::route('clients.create')->with('messages', 'Cliente cadastrado com sucesso.');
			// }
			// else
			// {
			// 	return Redirect::back()->with('errors', 'Erro ao tentar cadastrar cliente, por favor tente novamente.')->withInput();
			// }
		//}
	}

	public function update($id)
	{
		// if (!$this->validator->validate(Input::all()) && !$this->addressValidator->validate(Input::all()))
		// {
		// 	$errors = $this->validator->getErrors();
		// 	$addressErrors = $this->addressValidator->getErrors();
			
		// 	$errors->merge($addressErrors);
		// 	return Redirect::back()->with('errors', $errors)->withInput();
		// }
		// else
		// {
			//if ($this->clientRepository->update($id, Input::all()))
			//{
				$this->clientRepository->update($id, Input::all());
				return Redirect::route('clients.index')->with('messages', 'Informações do cliente alteradas com sucesso.');
			// }
			// else
			// {
			// 	return Redirect::back()->with('errors', 'Erro ao tentar alterar informações do cliente, por favor tente novamente')->withInput();
			// }
		//}
	}

	public function destroy($id)
	{
		$this->clientRepository->delete($id);
		return Redirect::route('clients.index')->with('messages', 'Cliente removido com sucesso.');
	}
}