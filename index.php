<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>主页</title>
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
require_once "DataBase.php";
session_start();
$sql_contents ="SELECT * FROM contents ORDER BY Id DESC ;";
$sql_user ="SELECT * FROM user";
if(!empty($_POST['clean'])){
    session_destroy();            //清除session
//    die(session_destroy().$_GET['clean']);
}
?>
<div class="panel panel-default">
    <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;">
            <a href="login.php" style="float: left;"><span class="glyphicon glyphicon-user"></span></a>
            <a href="#"><span class="glyphicon glyphicon-home"></span></a>
                <?php if ($_SESSION!=null)             //假如session里有值 ，显示右上角的编辑
                    echo '<a href="add.php" style="float: right;"><span class="glyphicon glyphicon-edit"></span></a>'
                ?>
        </h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                <ul class="breadcrumb" style="margin: 0px;padding: 0px">
                    <li>
                        <a href="#">主页</a> <span class="divider">/</span>
                    </li>
                    <li>
                        <a href="#">测试</a> <span class="divider">/</span>
                    </li>
                    <li class="active">
                        测试
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <?php
                foreach ($conn->query($sql_contents)as $row_contents){ ?>
                    <blockquote>
                        <p>
                         <?php
                         $id=$row_contents['Id'];     //传递帖子的id
                         echo "<a href=archives.php?id=$id>".$row_contents['title']."</a>";
                         ?>
                        <p style="font-size: 16px;font-family: cursive;"><?php echo iconv_substr($row_contents['contents_str'],5,25)?></p>
                                </p>
                        <small>
                            <cite>
                                <?php
                                foreach ($conn->query($sql_user)as $row_user){
                                    if($row_contents['user_id']==$row_user['Id']){
                                        echo $row_user['nickname']."&nbsp;&nbsp;".$row_contents['date'].'&nbsp;&nbsp;<span class="glyphicon glyphicon-eye-open"></span>'.$row_contents['hits'];
                                        break;
                                    }
                                }
                                ?>
                            </cite></small>
                    </blockquote>
                    <hr>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>