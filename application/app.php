<?php 

require_once '/../config/define.php';
require_once '/../libraries/loader.php';
require_once '/../core/baseController.php';
require_once '/../core/baseModel.php';
require_once '/../libraries/database.php';
require_once '/../helpers/session.php';
require_once '/../helpers/url.php';
require_once '/../helpers/validation.php';

class Application
{
	private $url;
	private $loader;
	private $session;
	private $controller = "default";
	private $method = "defaultMethod";
	private $arrParams = array();

	function __construct()
	{
		$this->loader = new Loader;
		$this->session = new Session;
		$this->url = new URL;
	}

	function parseURL() 
	{
		$arrQueryString = explode('&', $_SERVER['QUERY_STRING']);
		$arrParseResult = array_diff(explode('/', $arrQueryString[0]), array(''));
		if(count($arrParseResult) >= 1) $this->controller = $arrParseResult[0];
		if(count($arrParseResult) >= 2) $this->method = $arrParseResult[1];
		if(count($arrParseResult) >= 3) $this->arrParams = array_slice($arrParseResult, 2);
	}

	function run() 
	{
		$this->parseURL();
		$this->loader->callController($this->controller . 'Controller', $this->method, $this->arrParams);
	}
}

$app = new Application;
$app->run();
