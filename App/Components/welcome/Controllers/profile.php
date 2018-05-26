<?php

namespace App\Components\hello\Controllers;

use \Softhub99\Zest_Framework\Component\View\View;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class Profile extends \Softhub99\Zest_Framework\Component\Controller\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        //rest code
    }
    public function about(){
    	echo $this->route_params['username'];
    }
   
}
