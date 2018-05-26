<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Database extends \Softhub99\Zest_Framework\Model\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function CreateDb($name)
    {
        $db = static::Db();
        $db->CreateDb($name);
        $db->Close();
        return true;
    }
}
