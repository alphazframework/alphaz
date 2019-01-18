<?php

namespace App\Components\welcome\Models;

use Zest\Database\Db as DB;

class Post
{
    public function name()
    {
        $db = new DB();
        $db->db()->method(); //example code
        //$db->db()->close() //close the connection
    }
}
