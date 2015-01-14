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
}