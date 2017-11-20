<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 21:44
 */
require_once '../model/user.php';
require_once '../MysqlClass.php';
class editContents
{
    function add(contents $contents){
        $ID =$contents->getUserId();
        $user_id=$contents->getUserId();
        $classification=$contents->getClassification();
        $title=$contents->getTitle();
        $contents_str=$contents->getContentsStr();
        $img=$contents->getImg();
        $hits=$contents->getHits();
        $date=$contents->getDate();
        $con=MysqlClass::getCon();
        $sql="INSERT INTO contents VALUE ($ID,$user_id,$classification,$title,$contents_str,$img,$hits,$date)";
        $con->exec($sql);
    }
    function del(contents $contents){
        $con=MysqlClass::getCon();
        $id=$contents->getID();
        $sql="DELETE FROM contents WHERE ID=$id";
        $con->exec($sql);
    }
    function update(){

    }
    function query(){

    }
}