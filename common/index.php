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

    <style type="text/css">
        .block{
            float: left;
            width: 50%;
            height: 60px;
            padding:5%;
        }
    </style>

</head>
<body style="background: #eeeef2">
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
                <div style="text-align: center">
                    <img style="width: 60px; height: 60px;margin-top: auto;margin-top: 20px"  src="">
                    <h3>用户名</h3>
                </div>
            <hr>

            <div class="panel-body" style="text-align: center;background-color: #fff;margin: 0px">
                <div class="block"><a href="UseZiLiao.jsp"><span class="glyphicon glyphicon-cog"></span>我的资料</a></div>		<!--传递id过去-->
                <div class="block"><a href="UserPasswd.jsp"><span class="glyphicon glyphicon-cog"></span>修改密码</a></div>
                <div class="block"><a href=""><span class="glyphicon glyphicon-cog"></span>我的发帖</a></div>
                <div class="block"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>