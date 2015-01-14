<?php 
require_once '/../libraries/Loader.php';

class BaseController 
{
	protected $loader;
	protected $session;
	protected $url;
	protected $validation;

	function __construct() 
	{
		$this->loader = new Loader;
		$this->session = new Session;
		$this->url = new URL;
		$this->validation = new Validation;
	}
}