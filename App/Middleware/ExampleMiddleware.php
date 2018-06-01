<?php

namespace App\Middleware;

class ExampleMiddleware
{
    public function before($params)
    {
        echo 'Before';
    }

    public function after($params)
    {
        echo 'After';
    }
}
