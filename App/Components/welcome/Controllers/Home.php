<?php

namespace App\Components\welcome\Controllers;

use Zest\Component\View\View;

define('__WELCOME__', 'welcome/Views/');

class Home extends \Zest\Controller\Controller
{
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        View::rander(__WELCOME__.'Home/index');
    }

    public function about()
    {
        echo $this->router_params['username'];
    }
}
