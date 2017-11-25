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
 * Date: 2017/11/16
 * Time: 10:37
 */
require_once "DataBase.php";
session_start();
$sql_contents ="SELECT * FROM contents";
$sql_user ="SELECT * FROM user";
$sql_comment="SELECT *FROM comment";
$sql_hite="update contents set hits=hits+1 where Id=".$_GET['id'];
$conn->exec($sql_hite);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <!--标题-->
        <h3 class="panel-title" style="text-align: center;">
            <a href="login.php" style="float: left;"><span class="glyphicon glyphicon-user"></span></a>
            <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
            <?php if ($_SESSION!=null)             //假如session里有值 ，显示右上角的编辑
                echo '<a href="add.php" style="float: right;"><span class="glyphicon glyphicon-edit"></span></a>'
            ?>
        </h3>
    </div>

    <div class="panel-body" style="padding: 10px">
        <div class="panel panel-default" style="margin-bottom: 10px">
            <div class="panel-body">
                <h2>
                    <?php
                    $row_contents=null;
                    foreach ($conn->query($sql_contents)as $row_contents){
                        if($row_contents['Id']==$_GET['id']){
                            echo $row_contents['title'];
                        ?>
                    </h2>
                <small><?php
                    foreach ($conn->query($sql_user)as $row_user){
                        if($row_contents['user_id']==$row_user['Id']){
                            echo '  '.$row_user['nickname'].'   '.$row_contents['date'].'<span class="glyphicon glyphicon-eye-open"></span>'.$row_contents['hits'];
                            break;
                        }
                    }
                    ?></small>
                <hr>
                <p><?php
                    echo $row_contents['contents_str'];
                    ?></p>
                <?php
                break;
                    }
                }
               ?>

            </div>
        </div>
        <ul class="list-group">
            <?php

            /*
             * 输出留言
             * 用sql输出本帖子对应的留言   select *from comment where contents_id=_get['id']
             * 然后打印出来，之前写的东西都是坑啊 填坑
             * */

            $sql_select_comment='select *from comment where contents_id='.$_GET['id'];
            foreach ($conn->query($sql_select_comment)as $row_select_comment){
                echo '<li class="list-group-item"><small style="float: left;">';

                //echo $_SESSION['name'];
                //echo $row_select_comment['user_id'];   //本条留言对应的用户id
                foreach ($conn->query($sql_user)as $row_user){
                    if ($row_user['Id']==$row_select_comment['user_id']){
                        echo $row_user['nickname'];
                    }
                }

                //输出昵称
                echo '</small><small style="float: right;">--';
                echo $row_select_comment['date'].'</small><br>'.$row_select_comment['comment_str'].'</li>';
            }

//            foreach ($conn->query($sql_comment)as $row_comment){                    //遍历留言
//                if ($row_comment['contents_id']==$row_contents['Id']){                   //通过帖子id找到留言
//                    echo '<li class="list-group-item"><small style="float: left;">';
//                    $sql_eq='select *from USER WHERE Id='.$row_comment['user_id'];    //输出昵称
//                    foreach ($conn->query($sql_eq)as $row_eq){
//                        echo $row_eq['nickname'];
//                        break;
//                    }
//                    echo '</small><small style="float: right;">--';
//                    echo $row_comment['date'].'</small><br>'.$row_comment['comment_str'].'</li>';
//                }
//            }
            ?>
        </ul>
        <?php
        echo '<form action=archives.php?id='.$_GET['id'];
        ?>
        method="post">
        <form action="archives.php" method="post">
            <div class="form-group">
                <label for="name">文本框</label>
                <textarea class="form-control" rows="3" name="text" <?php if ($_SESSION==null){ echo 'readonly="true" placeholder="登录后发表留言"'; }?>></textarea><br/>

                <?php
                if ($_SESSION!=null){
                echo '<input type="submit" class="btn btn-primary" style="float: right" value="发送" name="sub">';
                }
                ?>
            </div>
        </form>
        <?php

        /*
         * 当用户点击提交时添加留言
         * 从session里获取用户名 在查找用户对应的id
         * 从get获取帖子id
         * 从表单获取留言内容
         * date获取时间
         * */

        //此处为垃圾代码   2017/11/22/8：57   填坑
//        if (!empty($_POST['sub'])){
//            $sql_user_id='select *from contents WHERE contents_id='.$_GET['id'];    //查询id对应的帖子 用来查询对应的用户id
//            echo '帖子id='.$_GET['id'].$sql_user_id;
//            foreach ($conn->query($sql_user_id)as $row_user_id){
//                echo print_r($row_user_id);    //测试输出帖子    没问题
//                foreach ($conn->query($sql_user)as $row_user){        //输出用户表 查询应的id
//                    if($row_user_id['user_id']==$row_user['Id']){
//                        $user_id=$row_user_id['user_id'];
//                        break;
//                    }
//                }
//            }

        //   遍历用户   从session里获取用户名 来判断用户id

        if(!empty($_POST['sub'])){
            foreach ($conn->query($sql_user)as $row_user) {
                if ($row_user['UserName']==$_SESSION['name']){
                    $user_id=$row_user['Id'];
                    break;
                }
            }

            $contents_id=$_GET['id'];
            $text=$_POST['text'];
            $date=date("Y-m-d H:i:s");
            $sql_liuyan="INSERT INTO comment VALUES (NULL ,'$user_id','$contents_id','$text','$date')";      //sql给警告 emmmmm 怕sql注入
            //echo $sql_liuyan;   测试输出的sql是否正确
            $conn->exec($sql_liuyan);
            echo "<script>alert('评论成功');location.href='./index.php'</script>";
            //header('Location:./index.php');
        }
        ?>
    </div>
</body>
</html>