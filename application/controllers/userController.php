<?php 

class UserController extends BaseController
{
	function __construct() 
	{
		parent::__construct();
	}

	function defaultMethod() 
	{
		$this->login();
	}

	private function checkLogin()
	{
		extract($_POST);
		$this->userModel = $this->loader->loadModel('userModel');
		$this->userModel->__set('username', $this->validation->prepareData($username));
		$this->userModel->__set('password', $this->validation->prepareData($password));
		
		$user = $this->userModel->getUserByUsername($this->userModel->username);
		var_dump($user);
		if(empty($user)) {
			die('No user');
		}
		if($user[0]['isaccountant'] == false) {
			die('No right to login');
		}
		if($user[0]['password'] !== hash('sha256', $this->userModel->password, false)) {
			die('Wrong password');
		}
		echo 'success';
		$this->session->setValue('username', 'hieu');
		$this->url->redirect('user/listEmployee');
		
	}

	function login()
	{
		if(!empty($_POST)) {
			$this->checkLogin();
		} else {
			if($this->session->isLoggedIn()) {
				$this->url->redirect('user/listEmployee');
			} else {
				$this->loader->loadView('login');
			}
		}
	}

	function listEmployee()
	{
	if(!$this->session->isLoggedIn()) {
			$this->url->redirect('user/login');
		} else {
			$this->loader->loadView('listEmployee');
		}
	}
}