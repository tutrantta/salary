<?php 

//database
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'salary');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_TBL_USER', 'tbl_user');
define('DB_TBL_EMP_TYPE', 'tbl_employeetype');
define('DB_TBL_WEEKLY_SALARY', 'tbl_weeklysalary');

//path
define('PROJECT_FOLDER', 'salary');
define('APPLICATION_DIR', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJECT_FOLDER . '/');
define('APPLICATION_PATH', $_SERVER['SERVER_NAME'] . '/' . PROJECT_FOLDER . '/');
define('CONTROLLERS_DIR', APPLICATION_DIR . 'application/controllers/');
define('MODELS_DIR', APPLICATION_DIR . 'application/models/');
define('VIEWS_DIR', APPLICATION_DIR . 'application/views/');

