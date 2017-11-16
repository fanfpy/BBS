<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 21:18
 */
require_once '../model/user.php';
include_once '../MysqlClass.php';
class editUser
{
    function add(user $u){
        $con=MysqlClass::getCon();
        $name=$u->getUserName();
        $pass=$u->getUserPasswd();
        $nick=$u->getNickname();
        $head=$u->getUserTouxiang();
        $date=$u->getUserDate();
        $sql="INSERT INTO `user` VALUES(null,$name,$pass,$nick,NULL,$head,$date)";
        $con->exec($sql);
    }
    function del(user $u){
        $id=$u->getId();
        $con=MysqlClass::getCon();
        $sql="DELETE FROM USER WHERE ID = $id";
        $con->exec($sql);
    }

    function update(user $u){
        $pas=$u->getUserPasswd();
        $con=MysqlClass::getCon();
        $sql="DELETE FROM USER WHERE UserPasswd = $pas";
        $con->exec($sql);
    }

    function query(){
        $con=MysqlClass::getCon();
        $sql="SELECT * FROM user";
        $res=$con->query($sql);
        return $res;
    }
}
$a=new editUser();
$rs=$a->query();
while ($row=$rs->fetch()){
    echo $row['UserName'].'<br>';
    echo $row['UserPasswd'].'<br>';
}