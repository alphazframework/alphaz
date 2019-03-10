<?php


//namespace required to define your component you can add many routes in one component as well
$namespace = "App\Components\welcome\Controllers";

// Its create the url localhost/welcome'
$com->add('welcome', ['controller' => 'Home', 'action' => 'index', 'namespace'=>$namespace]);

//Route with middleware
$com->get('welcome/middleware', "Home@index@$namespace", "App\Components\welcome\Middleware\@Welcome");
