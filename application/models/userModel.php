<?php 

class UserModel extends BaseModel
{
	private $id;
	private $employeeTypeID;
	private $username = "";
	private $password = "";
	private $lastname;
	private $firstname;
	private $isAccountant;

	function __construct() 
	{
		parent::__construct();
	}

	function __set($key, $value)
	{
		$this->{$key} = $value;
	}

	function __get($key) 
	{
		return $this->{$key};
	}

	function getUserByUsername($username)
	{
		$where = array('username' => $username);
		return $this->db->select(array(), DB_TBL_USER, $where);
	}
}