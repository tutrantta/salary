<?php 
require_once '/../libraries/Loader.php';

class BaseModel 
{
	protected $loader;
	protected $db;
	protected $session;
	protected $validation;

	function __construct() 
	{
		$this->loader = new Loader;
		$this->db = new Database;
		$this->session = new Session;
		$this->validation = new Validation;
	}
}