<?php 

class SalaryController extends BaseController
{
	function __construct() 
	{
		parent::__construct();
	}

	function defaultMethod() 
	{
		$this->loader->loadView('404');
	}

	function calculate($employeeID = "")
	{
	if(!$this->session->isLoggedIn()) {
			$this->url->redirect('user/login');
		} else {
			$this->loader->loadView('salary');
		}
	}
}