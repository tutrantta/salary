<?php 
require_once '/../libraries/Loader.php';

class BaseModel 
{
	protected $loader;
	protected $db;
	protected $session;
	protected $url;

	function __construct() 
	{
		$this->loader = new Loader;
		$this->db = new Database;
		$this->session = new Session;
		$this->url = new URL;
	}
}