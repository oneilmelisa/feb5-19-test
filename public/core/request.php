<?php
/**
 * Created by PhpStorm.
 * User: oneil
 * Date: 2/11/2019
 * Time: 4:10 PM
 */

class Request
{
    public static function uri ()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}