<?php

namespace App\Controllers;

class Home extends \Zest\Controller\Controller
{
    /**
     * Show the index page.
     *
     * @return void
     */
    public function index()
    {
        view('Home/index');
    }
}
