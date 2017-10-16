<?php
    include "../public/header.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../static/css/header.css">
    <link rel="stylesheet" href="../static/css/bottom.css">
    <link rel="stylesheet" href="../static/fonts/iconfont.css">
    <link rel="stylesheet" href="../static/css/about.css">

    <script src="../js/jquery-3.2.1.js"></script>

    <script src="../js/back.js"></script>
    <script src="../js/about.js"></script>
    <title>Document</title>
</head>
<body>
<!--banner开始-->
<section class="banner">
    <ul class="banner-main">
        <?php
        include "../public/db.php";
        $sql="select * from banner where cid=20";
        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$result->fetch()){
            ?>
            <li><img src="../admin/<?php echo $row['bpath']; ?>" alt="" /></li>
        <?php            }
        ?>
    </ul>
    <ul class="btns">
        <li style="background: #fff;"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</section>
<div class="heng">LAST WORK</div>
<!--banner结束-->
<!--主页主要内容开始-->
<section class="main">
    <ul class="content">
        <?php
        include "../public/db.php";
        $sql="select * from category where pid=20";
        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$result->fetch()){
            ?>
            <li><a href="../index/neirong.php">
                    <form action="../index/neirong.php">
                        <div class="imgbox">
                            <img src="../admin/<?php echo $row['cpath']?>" alt="" /></div>
                        <h2><?php echo $row['cname']?></h2>
                        <h6>艺格视觉的简介，艺格视觉的起源</h6>
                        <div class="hiddens1">
                            <h2><?php echo $row['cname']?></h2>
                        </div>
                        <input class="cid" type="submit" name="cid" value="<?php echo $row['cid'] ?>"></input>
                    </form>
                </a>
            </li>
        <?php            }
        ?>
    </ul>
</section>
<!--主页主要内容结束-->
<!--横1开始-->
<section class="heng1">
    <div class="heng1-main">
        <div class="heng-head">四大品牌整合体系+六大专业板块，实现一流品牌诉求</div>
        <div class="nengli">能力</div>
        <div class="heng-eng">Four major brand integration system+the six major sectors, to achieve first-class brand appeal</div>
    </div>
</section>
<!--横1结束-->
<!--品牌架构开始-->
<section class="jiagou">
    <h1>艺格视觉四大品牌整合架构<br>BRAND INTEGRETION PROCESS</h1>
    <ul class="jiagou-main">
        <li>
            <div class="blackt">1、定位</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
        <li>
            <div class="blackt">2、创造</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
        <li>
            <div class="blackt">3、提升</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
        <li>
            <div class="blackt">4、推广</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
    </ul>
</section>
<!--品牌架构结束-->
<!--横2开始-->
<section class="heng1">
    <div class="heng1-main">
        <div class="heng-head">工作环境舒适，创意在此飞翔</div>
        <div class="nengli">环境</div>
        <div class="heng-eng">Bring together top creative talents and boost brand value.creative flying here</div>
    </div>
</section>
<!--横2结束-->
<section class="env">
    <div class="e1"></div>
    <div class="es">
        <div class="e2"></div>
        <div class="e3"></div>
    </div>
</section>
<?php
    include "../public/bottom.php";
?>
</body>
</html>
