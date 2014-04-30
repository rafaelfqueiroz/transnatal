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

	public function register()
	{
		return View::make('pages.clients.register');
	}
}