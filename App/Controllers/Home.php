<?php

namespace App\Controllers;

//for using Middleware
use Softhub99\Zest_Framework\Middleware\Middleware;
//for using View
use Softhub99\Zest_Framework\View\View;
class Home extends \Softhub99\Zest_Framework\Controller\Controller
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
