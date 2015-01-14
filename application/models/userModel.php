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

	function getListEmployees()
	{
		$columns = array('firstname', 'lastname', 'id');
		return $this->db->select(array(), DB_TBL_USER, array());
	}

	private function getEmployeeTypeByID($employeetype_id)
	{
		$where = array('id' => $employeetype_id);
		$arrEmployeeTypes = $this->db->select(array(), DB_TBL_EMP_TYPE, $where);
		return $arrEmployeeTypes[0]['name'];
	}

	function getEmployeeInfoByID($id)
	{
		$columns = array('id', 'employeetype_id', 'lastname', 'firstname');
		$where = array('id' => $id);
		$arrEmployees = $this->db->select($columns, DB_TBL_USER, $where);
		if(empty($arrEmployees)) return $arrEmployees;
		$employeeType = $this->getEmployeeTypeByID($arrEmployees[0]['employeetype_id']);
		$result = $arrEmployees[0];
		$result['employeeType'] = $employeeType;
		return $result;
	}
}