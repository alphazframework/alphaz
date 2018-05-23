<?php

namespace App\Models;

use Softhub99\Zest_Framework\Database\Zest\Builder as Model;

/**
 * Example post model
 *
 * PHP version 7.0
 */
class Post extends Model
{
    public function __construct(){
    	$database = new Model;
    	$database->table = 'posts';
    	//rest code
    }
}
