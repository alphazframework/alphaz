<?php

namespace App\Models;

use Zest\Database\Zest\Builder as Model;

/**
 * Example post model.
 *
 * PHP version 7.0
 */
class Post extends Model
{
    public function get()
    {
        Model::table('tblname')->method(); //example code
    }
}
