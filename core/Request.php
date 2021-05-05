<?php

namespace app\core;


class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?'); //jeśli w url występuje ?, podaje jego pozycję
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position); //jeśli jest ?, obcina url do znoku ?

    }
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
