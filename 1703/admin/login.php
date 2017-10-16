<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION["login"])){
    echo "<script>alert('已登录');location.href='index.php'</script>";
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/1703/1703cms/static/css/bootstrap.min.css">
    <script src="http://localhost/web/1703/js/jquery-3.2.1.js"></script>
    <script src="http://localhost/web/1703/js/jquery.validate.js"></script>
    <style>
        a{
            text-decoration: none;
        }
        form{
            width:440px;
            height:390px;
            border-radius: 5px;
            border: 1px solid #9d9d9d;
            position: absolute;
            top:0;
            right:0;
            left:0;
            bottom:0;
            margin:auto;
            overflow: hidden;
        }
        header{
            width:100%;
            height:50px;
            background: #9d9d9d;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            color: #fff;
        }
        main{
            width:325px;
            padding:25px 0px;
            padding-left: 115px;
            font-size: 18px;
        }
        input{
            margin-top: 10px;
            width:200px;
            height:30px;
            float: left;
            outline: none;
        }
        button{
            width:200px;
            height:40px;
            margin:0 auto;
            background: cornflowerblue;
            border-radius: 5px;
            border:none;
            font-size: 20px;
            color: #fff;
            outline: none;
        }
        span{
            font-size: 16px;
            float: right;
            line-height: 40px;
        }
        .mes{
            width:100%;
            height:70px;
            margin-top: 20px;
        }
        .error{
            display: block;
            margin-top: 10px;
            font-size: 14px;
            line-height: 36px;
        }
    </style>
<body>
<form action="checkLogin.php" method="post">
    <header>登录页面</header>
    <main>
        <div class="mes">输入姓名：<br><input type="text" name="aname" placeholder="请输入您的姓名" autocomplete="off"><label class="error"></label></div>
        <div class="mes">输入密码：<br><input type="password" name="apass" placeholder="请输入您的密码" autocomplete="off"><label class="error"></label></div><br><br>
        <button type="submit">登录</button>
    </main>
</form>
</body>
<script>
    $(function(){
        $("form").validate({
            rules:{
                aname:{
                    required:true,
                    minlength:2
                },
                apass:{
                    required:true,
                    minlength:6
                }
            },
            messages:{
                aname:{
                    required:"用户名不能为空",
                    minlength:"长度不能小于2"
                },
                apass:{
                    required:"密码不能为空",
                    minlength:"长度不能小于6"
                }
            }
        })
    })
</script>
</html>