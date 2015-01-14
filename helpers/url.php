
<?php 
require_once '/../config/define.php';

class URL
{
	function redirect($path) 
	{
		$url = 'http://' . APPLICATION_PATH . $path;
		header("Location: $url");
	}
}