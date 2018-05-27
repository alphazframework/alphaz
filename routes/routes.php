<?php 
// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
//for test middleware
$router->add('middlewaretest',['controller'=>'Home','action'=>'middlewaretest']);
$router->dispatch($_SERVER['QUERY_STRING']);