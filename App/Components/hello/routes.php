<?php


//namespace required to define your component you can add many routes in one component as well
$namespace = "App\Components\hello\Controllers";

// Its create the url localhost/blog/helloworld'
$com->add('helloworld', ['controller' => 'Home', 'action' => 'index', 'namespace'=>$namespace]);
// Its create the url localhost/blog/profile/username/about 'username'=> is any parameter
$com->add('{controller}/{username:[a-z+0-9]+}/{action}', ['controller' => 'Profile', 'action' => 'about', 'namespace'=>$namespace]);
