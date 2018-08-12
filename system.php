<?php

require_once __DIR__.'/vendor/autoload.php';
$File = new Zest\Files\Files();
$File->systemDirs();
$session = new Zest\Session\Session();
error_reporting(E_ALL);
set_error_handler('Zest\Expection\Expection::errorHandler');
set_exception_handler('Zest\Expection\Expection::exceptionHandler');
$app = new Zest\Router\App();
$app->run();
$server = new Zest\Common\Server();
$maintenance = new Zest\Common\Maintenance();
$maintenance->run();
$server->get();
