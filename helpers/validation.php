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
}