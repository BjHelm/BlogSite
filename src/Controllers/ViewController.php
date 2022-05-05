<?php

namespace BlogApp\Controllers;

class ViewController
{
    /**
     * @throws \Exception
     */
    public static function render($view, $args = []): void
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/../src/Http/Views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
}