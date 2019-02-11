<?php

require_once __DIR__.'/vendor/autoload.php';
$expection = new \Zest\Expection\Expection();
(new Zest\Files\Files())->systemDirs();
(new Zest\Session\Session());
(new Zest\Router\App())->run();
(new Zest\Common\Maintenance())->run();
