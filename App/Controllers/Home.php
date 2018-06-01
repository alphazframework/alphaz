<?php

namespace App\Controllers;

//for using View
use Softhub99\Zest_Framework\Middleware\Middleware;
//for using Middleware
use Softhub99\Zest_Framework\View\View;

/**
 * Home controller.
 *
 * PHP version 7.0
 */
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
