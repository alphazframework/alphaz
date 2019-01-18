<?php

require_once __DIR__.'/vendor/autoload.php';
(new Zest\Files\Files())->systemDirs();
(new Zest\Session\Session());
error_reporting(E_ALL);
set_error_handler('Zest\Expection\Expection::errorHandler');
set_exception_handler('Zest\Expection\Expection::exceptionHandler');
(new Zest\Router\App())->run();
(new Zest\Common\Maintenance())->run();
