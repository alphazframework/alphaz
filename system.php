<?php
require_once __DIR__ . "/vendor/autoload.php";
$File = new Softhub99\Zest_Framework\Files\Files;
$File->systemDirs();
$session = new Softhub99\Zest_Framework\Session\Session;
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
require_once route()->routes.'routes.php';

