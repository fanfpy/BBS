<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <?php require_once "DataBase.php"?>
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
 * Time: 10:37
 */
$sql_contents ="SELECT * FROM contents";
$sql_user ="SELECT * FROM user";
$sql_comment="SELECT *FROM comment";
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <!--标题-->
        <h3 class="panel-title" style="text-align: center;">
            <a href="login.html" style="float: left;"><span class="glyphicon glyphicon-user"></span></a>
            <a href="#"><span class="glyphicon glyphicon-home"></span></a>
            <a href="#" style="float: right;"><span class="glyphicon glyphicon-edit"></span></a>
        </h3>
    </div>
    <div class="panel-body" style="padding: 10px">
        <div class="panel panel-default" style="margin-bottom: 10px">
            <div class="panel-body">
                <h2><?php
                    foreach ($conn->query($sql_contents)as $row_contents){
                        if($row_contents['Id']==$_GET['id']){
                            echo $row_contents['title'];

                        ?>
                    </h2>
                <small>发帖人 ：<?php
                    foreach ($conn->query($sql_user)as $row_user){
                        if($row_contents['user_id']==$row_user['Id']){
                            echo '  '.$row_user['UserName'];
                            break;
                        }
                    }
                    ?></small>
                <hr>
                <p><?php
                    echo $row_contents['contents_str'];
                    ?></p>
                <?php
                    }
                }
               ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>