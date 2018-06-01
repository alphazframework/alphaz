<?php

namespace App\Components\hello\Controllers;

/**
 * Home controller.
 *
 * PHP version 7.0
 */
class profile extends \Softhub99\Zest_Framework\Component\Controller\Controller
{
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        //rest code
    }

    public function about()
    {
        echo $this->route_params['username'];
    }
}
