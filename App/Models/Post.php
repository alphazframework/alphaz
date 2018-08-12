<?php

namespace App\Models;

use Config\Config;
use Softhub99\Zest_Framework\Database\Db as DB;

class Post extends DB
{
    /*
    * Store database name
    */
    protected static $db_name = Config::DB_NAME;
    /*
    * Store database table name
    */
    protected static $db_tbl = 'posts';

    public function name()
    {
        $db = new DB();
        $db->db()->method(); //example code
        //$db->db()->close() //close the connection
    }
}
