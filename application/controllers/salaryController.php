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
		} else if(!empty($_POST)) {
			
		} else {
			$this->userModel = $this->loader->loadModel('userModel');
			$this->userModel->id = $this->validation->prepareData($employeeID);

			$employeeInfo = $this->userModel->getEmployeeInfoByID($this->userModel->id);
			if(empty($employeeInfo)) die("There's no employee with this id in database");

			$this->loader->loadView('salary', array('employeeInfo' => $employeeInfo));
		}
	}
}