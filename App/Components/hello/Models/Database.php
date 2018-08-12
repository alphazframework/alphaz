<?php

namespace App\Models;

/**
 * Example user model.
 *
 * PHP version 7.0
 */
class Database extends \Zest\Model\Model
{
    /**
     * Get all the users as an associative array.
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
