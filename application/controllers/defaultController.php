<?php 

class DefaultController extends BaseController
{
	function __construct() 
	{
		parent::__construct();
	}

	function defaultMethod() 
	{
		// $this->testModel = $this->loader->loadModel('testModel');
		// var_dump($this->testModel->test());
	}
}