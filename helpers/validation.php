<?php 
require_once '/../config/define.php';

class Validation
{
	function prepareData($data)
	{
		$data = trim($data);
		$data = strip_tags($data);
		return $data;
	}

	function checkSet($data) 
	{
		return isset($data);
	}

	function checkLength($data, $minLength = 0, $maxLength = 1000000)
	{
		return $minLength <= strlen($data) && strlen($data) <= $maxLength;
	}

	function isNull($data)
	{
		return empty($data);
	}

	function containsWhiteSpace($data)
	{
		return preg_match('/\s/',trim($data));
	}

	function validateLoginInput($username, $password)
	{
		define('MAXLENGTH', 30);
		define('MINLENGTH', 4);
		if(!$this->checkSet($username)) return false;
		if(!$this->checkSet($password)) return false;
		if(!$this->checkLength($username, MINLENGTH, MAXLENGTH)) return false;
		if(!$this->checkLength($password, MINLENGTH, MAXLENGTH)) return false;
		if($this->isNull($username)) return false; 
		if($this->isNull($password)) return false;
		if(!is_string($username)) return false;
		if(!is_string($password)) return false;
		if($this->containsWhiteSpace($username)) return false;
		return true;
	}
}