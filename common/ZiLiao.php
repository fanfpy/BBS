
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
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
 * Date: 2017/11/15
 * Time: 23:34
 */
require_once '../DataBase.php';
session_start();
$sql_user="select *from user";
foreach ($conn->query($sql_user) as $row_user){
    if ($row_user['UserName']==$_SESSION['name']){
        $name=$_SESSION['name'];
        $nick=$row_user['nickname'];
        $jinbei=$row_user['UserJiBie'];
        $date=$row_user['user_date'];
        break;
    }
}
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <!--标题-->
        <h3 class="panel-title" style="text-align: center;">
            <a href="../add.php" style="float: left;"><span class="glyphicon glyphicon-user"></span></a>
            <a href="../index.php"><span class="glyphicon glyphicon-home"></span></a>
            <a href="../add.php" style="float: right;"><span class="glyphicon glyphicon-edit"></span></a>
        </h3>
    </div>
    <div class="panel-body" style="padding: 10px">
        <div class="panel panel-default" style="margin-bottom: 10px">
            <div class="panel-heading">
                <h3 class="panel-title">
                    个人资料
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover" style="margin-bottom: 0px">
                    <tr>
                        <td>用户名</td>
                        <td style="text-align: right"><?php echo $nick?></td>
                    </tr>
                    <tr>
                        <td>邮箱</td>
                        <td style="text-align: right"><?php echo $name?></td>
                    </tr>
                    <tr>
                        <td>用户级别</td>
                        <td style="text-align: right"><?php echo $jinbei?></td>
                    </tr>
                    <tr>
                        <td>创建时间</td>
                        <td style="text-align: right"><?php echo $date?></td>
                    </tr>
                    <tr>
                        <td>帖子数</td>
                        <td style="text-align: right">测试</td>
                    </tr><tr>
                        <td>回复数</td>
                        <td style="text-align: right">测试</td>
                    </tr>
                </table>
            </div>
        </div>
        <a href="index.php"><button class="btn btn-primary btn-block">返回</button></a>
    </div>
</div>
</body>
</html>

