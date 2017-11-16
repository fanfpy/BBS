<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 20:08
 */

class MysqlClass
{
    public static function getCon()
    {
        try
        {
            $con=new PDO('mysql:host=localhost;dbname=bbs','root','w2324802641');
            echo '连接成功<br>';
            return $con;
        }catch (PDOException $e)
        {
            die('连接错误'.$e->getMessage());
        }
    }
}