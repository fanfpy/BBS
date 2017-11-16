<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/14
 * Time: 22:58
 */


class DB
{
    public static function getCon()
	{
        try
		{
            $co=new PDO('mysql:host=localhost;dbname=bbs','root','w2324802641');
            echo '连接成功';
            return $co;
        }catch (PDOException $e)
		{
            die('连接错误'.$e->getMessage());
        }
    }
}

$co=DB::getCon();
$sql="select *from contents";
$st=$co->query(sql);
$list=$st->fetchAll();
print_r($list);