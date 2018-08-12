<?php

namespace App\Controllers;

//for using Middleware
use Zest\Middleware\Middleware;
//for using View
use Zest\View\View;

class Home extends \Zest\Controller\Controller
{
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        echo View::view('Home/index');
    }

    public function middlewaretest()
    {
        Middleware::run('before', 'ExampleMiddleware', $params = null);
        echo ' Middleware Test ';
        Middleware::run('after', 'ExampleMiddleware', $params = null);
    }
}
