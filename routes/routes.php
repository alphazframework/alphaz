<?php

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
//for test middleware
$router->add('middlewaretest', ['controller'=>'Home', 'action'=>'middlewaretest']);

//for test using closure
$router->add('user/{id:[0-9]}',  function ($args) {
    echo 'Example route using closure '.$args['id'] . " ".$args['name'];
});

//Cache the routes
$router->cacheRouters();
//Dispatch the request
$router->dispatch($_SERVER['QUERY_STRING']);
