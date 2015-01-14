<?php 

require_once '/../config/define.php';

class Loader 
{
	public function loadModel($model = "")
	{
		$modelDir = MODELS_DIR . $model . '.php';
		if(file_exists($modelDir)) {
			require_once ($modelDir);
			$objTempModel = new $model;
			return $objTempModel;
		}
		else {
			return null;
		}
	}

	public function loadController($controller = "") {
		$controllerDir = CONTROLLERS_DIR . $controller . '.php';
		if(file_exists($controllerDir)) {
			require_once($controllerDir);
			return $controllerDir;
		}
		else {
			return null;
		}
	}

	public function loadView($view = "", $data = array()) {
		$viewDir = VIEWS_DIR . $view . '.php';
		if(file_exists($viewDir)) {
			extract($data);
			require_once($viewDir);	
		}
		else {
			$this->loadView('404');
		}
	}

	public function callController($controller = "", $method = "", $params)
	{
		if($this->loadController($controller) != null) {
			$objTempClass = new $controller;
			call_user_func_array(array($objTempClass, $method), $params);		
		} else {
			$this->loadView('404');
		}

	}
}