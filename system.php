<?php

require_once __DIR__.'/vendor/autoload.php';
$File = new Softhub99\Zest_Framework\Files\Files();
$File->systemDirs();
$session = new Softhub99\Zest_Framework\Session\Session();
error_reporting(E_ALL);
set_error_handler('Softhub99\Zest_Framework\Expection\Expection::errorHandler');
set_exception_handler('Softhub99\Zest_Framework\Expection\Expection::exceptionHandler');
$router = new Softhub99\Zest_Framework\Router\Router();
$server = new Softhub99\Zest_Framework\Common\Server();
$maintenance = new Softhub99\Zest_Framework\Common\Maintenance();
$maintenance->run();
$server->get();
require_once route()->routes.'routes.php';
