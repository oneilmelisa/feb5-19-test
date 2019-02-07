<?php
//class Connection
//{
//    public static function make()
//    {
//        try {
//            return new PDO('mysql:dbname=mytodo;host=febtest-mysql;port=3306;charset=utf8', "root", "secret");
//        } catch (PDOException $e) {
//            die($e->getMessage());
//        }
//    }
//}
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
