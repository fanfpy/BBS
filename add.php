<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发帖</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: #eeeef2">
<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 8:40
 */
require_once 'DataBase.php';
session_start();
$sql_user="select *from user";
if(!empty($_POST['sub'])){                                        //判空
    foreach ($conn->query($sql_user)as $row_user){                //通过session里存的name找到用户的id
        if ($_SESSION['name']==$row_user['UserName']){
            $user_id=$row_user['Id'];
            break;
        }
    }
    $title=$_POST['title'];
    $text=$_POST['text'];
    $date=$date=date("Y-m-d H:i:s");
    $sql_contents ="INSERT INTO contents VALUES (NULL ,'$user_id','0','$title','$text',NULL ,'0','$date')";
    if ($conn->exec($sql_contents)){
        echo "<script>alert('发帖成功');location.href='index.php'</script>";
        //header("Location:index.php");
    }
}
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <!--标题-->
        <h3 class="panel-title" style="text-align: center;">
            <a href="login.php" style="float: left;"><span class="glyphicon glyphicon-user"></span></a>
            <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
            <a href="#" style="float: right;"><span class="glyphicon glyphicon-edit"></span></a>
        </h3>
    </div>
    <div class="panel-body" style="padding: 10px">
        <div class="panel panel-default" style="margin-bottom: 10px">
            <div class="panel-heading">
                <h3 class="panel-title">
                    发表主题
                </h3>
            </div>
            <div class="panel-body">
                <form action="add.php" method="post">
                    <!--    分类                -->
<!--                    <div class="dropdown">-->
<!--                        <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"-->
<!--                                data-toggle="dropdown">-->
<!--                            主题-->
<!--                            <span class="caret"></span>-->
<!--                        </button>-->
<!--                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">-->
<!--                            <li role="presentation">-->
<!--                                <a role="menuitem" tabindex="-1" href="#">测试一</a>-->
<!--                            </li>-->
<!--                            <li role="presentation">-->
<!--                                <a role="menuitem" tabindex="-1" href="#">测试二</a>-->
<!--                            </li>-->
<!--                            <li role="presentation">-->
<!--                                <a role="menuitem" tabindex="-1" href="#">测试三</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div><br>-->
                    <input type="text" class="form-control" placeholder="标题" name="title"><br>
                    <textarea class="form-control" rows="3" name="text"></textarea><br>
                    <input type="submit" class="btn btn-primary btn-block" value="发帖" name="sub" ><br>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
