<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/20
 * Time: 14:04
 */
try
{
    $conn=new PDO('mysql:host=localhost;dbname=bbs','root','w2324802641',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES'utf8';"));
}catch (PDOException $e)
{
    die('连接错误'.$e->getMessage());
}