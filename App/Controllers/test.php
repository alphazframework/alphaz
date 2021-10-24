<?php

namespace App\Controllers;
//for using View
use Zest\View\View;

class test extends \Zest\Controller\Controller
{
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        echo View::view('test/index');
    }
}
