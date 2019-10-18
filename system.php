<?php

define('__ZEST__ROOT__', __DIR__);

require_once __DIR__.'/vendor/autoload.php';
$expection = new \Zest\Exception\Exception();
(new Zest\Files\Files())->systemDirs();
(new Zest\Session\Session());
(new Zest\Bootstrap())->boot();
(new Zest\Common\Maintenance())->run();
