<?php

// Add the Routes
$router->get('', 'Home@index');

//for test middleware
$router->get('test', 'Home@index',"ExampleMiddleware");

//Test using closure
$router->get('user/{id:[0-9]}', function ($args) {
    echo 'Example route using closure '.$args['id'];
});
