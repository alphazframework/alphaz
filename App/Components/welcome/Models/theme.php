<?php

namespace App\Models;

class theme
{
    /**
     * Render a view template using Twig.
     *
     * @param string $template The template file
     * @param array  $args     Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;
        if ($twig === null) {
            $loader = new \Twig_Loader_Filesystem(dirname(__DIR__).'/Views');
            $twig = new \Twig_Environment($loader);
        }
        echo $twig->render($template, $args);
    }
}
