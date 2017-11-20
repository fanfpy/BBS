<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <?php
    require_once "DataBase.php";
    ?>
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

<div class="panel panel-default">
    <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;">
            <a href="login.php" style="float: left;"><span class="glyphicon glyphicon-user"></span></a>
            <a href="#"><span class="glyphicon glyphicon-home"></span></a>
            <a href="edit.php" style="float: right;"><span class="glyphicon glyphicon-edit"></span></a>
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
                $sql_contents ="SELECT * FROM contents";
                $sql_user ="SELECT * FROM user";
                foreach ($conn->query($sql_contents)as $row_contents){ ?>
                    <blockquote>
                        <p>
                         <?php
                         $id=$row_contents['Id'];
                         echo "<a href=archives.php?id=$id>".$row_contents['title']."</a>";
                         ?>
                                </p> <small>发布者 <cite>
                                <?php
                                foreach ($conn->query($sql_user)as $row_user){
                                    if($row_contents['user_id']==$row_user['Id']){
                                        echo '  '.$row_user['UserName'];
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