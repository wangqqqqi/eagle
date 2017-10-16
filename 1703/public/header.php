<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../static/css/header.css">
    <link rel="stylesheet" href="../static/fonts/iconfont.css">

    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/back.js"></script>
    <title>Document</title>
    <style>
        html,body{
            padding:0;margin:0;
        }
        nav{
            width:800px;height:30px;
            margin:0 auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border:1px solid #ccc
        }

    </style>

</head>
<body>
<?php
include "../public/db.php";
$sql="select * from category where pid=0";

$result=$db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);

?>
<!--头部开始-->
<header>
    <div class="head-main">
        <div class="logo"><a href=""></a></div>
        <div class="head-right">
            <ul class="head-right">
                <?php
                    while ($row=$result->fetch()) {

                        if($row["cname"]=="首页"){
                            $url="index.php";
                        }else if($row["cname"]=="关于"){
                            $url="about.php";
                        }else if($row["cname"]=="案例"){
                            $url="work.php";
                        }else if($row["cname"]=="服务"){
                            $url="service.php";
                        }else if($row["cname"]=="加入"){
                            $url="joinus.php";
                        }else if($row["cname"]=="联系"){
                            $url="contact.php";
                        }
                        ?>
                        <li><a href="<?php echo $url ?>?cid=<?php echo $row['cid']?>">
                            <?php
                            echo $row["cname"]
                            ?>
                        </a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
        <div class="a">
            <a href="../public/login.php">登录</a> &nbsp;<a href="">注册</a>
        </div>
    </div>
</header>
<section class="fix">
    <ul class="fix-main">
        <li class="phone">
            <div class="phone-icon">&#xe61c;</div>
            <div class="phone-num">13037088888</div>
        </li>
        <li class="qq">
            <div class="phone-icon">&#xe63a;</div>
            <div class="phone-num">1205767676</div>
        </li>
        <li class="twoD">
            <div class="phone-icon">&#xe604;
                <div class="codebox"></div>
            </div>
        </li>
        <li class="back">&#xe605;</li>
    </ul>
</section>

<div class="head"></div>
<!--头部结束-->
</body>
</html>