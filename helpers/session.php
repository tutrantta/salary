<?php 
require_once '/../config/define.php';

class Session 
{
	function sessionExists($key)
	{
		return isset($_SESSION[$key]);
	}

	function isLoggedIn()
	{
		return $this->sessionExists('username');
	}

	function checkLoggedIn() 
	{
		if(!$this->isLoggedIn()) {
			header("Location: user/login");
		}
	}

	function setValue($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	function getValue($key)
	{
		return $_SESSION[$key];
	}
}