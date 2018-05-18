<?php
require_once __DIR__ . "/vendor/autoload.php";
/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Softhub99\Zest_Framework\Expection\Expection::errorHandler');
set_exception_handler('Softhub99\Zest_Framework\Expection\Expection::exceptionHandler');

/**
 * Routing
 */
$router = new Softhub99\Zest_Framework\Router\Router();
require_once __DIR__ .'/routes/routes.php';

$session = new Softhub99\Zest_Framework\Session\Session;
$session->SessionPath();

$File = new Softhub99\Zest_Framework\Files\Files;
if(!is_dir("../Storage")){
	$File->MkDir('../Storage');
}
if(!is_dir("../Storage/Data")){
	$File->MkDir("../Storage/Data");
}
if(!is_dir("../Storage/Logs")){
	$File->MkDir("../Storage/Logs");
}
if(!is_dir("../Storage/Session")){
	$File->MkDir("../Storage/Session");
}	
if(!is_dir("../Storage/Backup")){
	$File->MkDir("../Storage/Backup");	
}	
