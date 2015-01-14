<?php 

class DefaultController extends BaseController
{
	function __construct() 
	{
		parent::__construct();
	}

	function defaultMethod() 
	{
		$this->url->redirect('user/login');
	}
}