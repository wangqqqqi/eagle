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
    <link rel="stylesheet" type="text/css" href="../static/css/service.css"/>
    <title>Document</title>
</head>
<body>
<!--banner开始-->
    <?php
    include "../public/db.php";
    $sql="select * from banner where cid=18";
    $result=$db->query($sql);

    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()){
        ?>
        <section class="banner" style="background: url(../admin/<?php echo $row['bpath'] ?>)"></section>
    <?php            }
    ?>
<!--banner结束-->
<!--文字开始-->
<section class="wenzi">
    <div class="left1">
        <?php
        include "../public/db.php";
        $sql="select * from shows where cid=18 AND pid=1";
        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$result->fetch()){
            ?>
            <h3><?php echo $row['stitle'] ?></h3>
            <p><?php echo $row['scon'] ?></p>
        <?php            }
        ?>
    </div>
</section>
<!--文字结束-->
<!--六个板块开始-->
<section class="six">
    <ul class="six-main">
        <li>
            <div class="one-img">
                <img src="../img/six1.jpg"/>
            </div>
            <div class="name">
                <h3>品牌营销策划</h3>
                <h6>Brand Marketing Agenda</h6>
            </div>
        </li>
        <li>
            <div class="one-img">
                <img src="../img/six2.jpg"/>
            </div>
            <div class="name2">
                <h3>品牌营销设计</h3>
                <h6>Brand Image Design</h6>
            </div>
        </li>
        <li>
            <div class="one-img">
                <img src="../img/six3.jpg"/>
            </div>
            <div class="name3">
                <h3>品牌包装设计</h3>
                <h6>Brand Packaging Design</h6>
            </div>
        </li>
        <li>
            <div class="one-img">
                <img src="../img/six4.jpg"/>
            </div>
            <div class="name4">
                <h3>环境导视设计</h3>
                <h6>Sign Systems Design</h6>
            </div>
        </li>
        <li>
            <div class="one-img">
                <img src="../img/six5.jpg"/>
            </div>
            <div class="name5">
                <h3>商业空间设计</h3>
                <h6>Sign Space Design</h6>
            </div>
        </li>
    </ul>
    <ul class="zhezhao">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</section>
<!--六个板块结束-->
<!--横条开始-->
<section class="heng">
    <div class="heng-main">
        <h1>BRAND INTEGRETION PROCESS<br>艺格视觉四大品牌整合架构</h1>
    </div>
</section>
<!--横条结束-->
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
<section class="heng">
    <div class="heng-main">
        <h1>SERVICE CONTENT<br>艺格视觉服务内容</h1>
    </div>
</section>
<!--横2结束-->
<!--服务开始-->
<section class="jiagou">
    <h1>艺格视觉服务内容<br>SERVICE CONTENT</h1>
    <ul class="jiagou-main">
        <li>
            <div class="blackt">1、品牌营销策划</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
        <li>
            <div class="blackt">2、品牌形象设计</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
        <li>
            <div class="blackt">3、产品包装系统设计</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
        <li>
            <div class="blackt">4、空间环境体验设计</div>
            <div class="heading">专业剖析诊断，提取品牌精髓</div>
            <div class="neirong">
                <h4>品牌诊断剖析<br>品牌市场调研<br>品牌架构梳理<br>品牌战略定位<br>品牌核心价值提炼</h4>
            </div>
        </li>
    </ul>
</section>
<!--服务结束-->
<?php
    include "../public/bottom.php";
?>
</body>
</html>