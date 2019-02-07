<?php
class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:dbname=mytodo;host=febtest-mysql;port=3306;charset=utf8', "root", "secret");;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
