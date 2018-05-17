<?php 
// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->dispatch($_SERVER['QUERY_STRING']);