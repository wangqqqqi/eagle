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
    <link rel="stylesheet" type="text/css" href="../static/css/joinus.css"/>
    <title>Document</title>
</head>
<body>
<!--banner开始-->
    <?php
    include "../public/db.php";
    $sql="select * from banner where cid=17";
    $result=$db->query($sql);

    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()){
        ?>
        <section class="banner" style="background: url(../admin/<?php echo $row['bpath'] ?>)no-repeat center/cover"></section>
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
<!--职位开始-->
<section class="zhiwei">
    <ul class="zhiwei-main">
        <li>
            <h1>SENIOR<br>DIRECTOR</h1>
            <h3>资深设计师</h3>
        </li>
        <li>
            <h1>DESIGN<br>DIRECTOR</h1>
            <h3>设计总监</h3>
        </li>
        <li>
            <h1>DESIGN<br>DIRECTOR</h1>
            <h3>策划总监</h3>
        </li>
    </ul>
    <ul class="zhiwei-zhezhao">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</section>
<!--职位结束-->
<!--图片开始-->
<section class="tupian">
    <div class="tu-left">
        <div class="tu-left1"></div>
        <div class="tu-left2"></div>
        <div class="tu-left3">
            <div class="tu-left3-1"></div>
            <div class="tu-left3-2"></div>
        </div>
    </div>
    <div class="tu-right">
        <div class="tu-right1"></div>
        <div class="tu-right2"></div>
        <div class="tu-right3">
            <div class="tu-right3-1"></div>
            <div class="tu-right3-2"></div>
        </div>
    </div>
</section>
<!--图片结束-->
<!--加入开始-->
<section class="join">
    <h1>LOONKING FORWARD TO<br>YOUR JOINING</h1>
    <div class="codes">
        <?php
        include "../public/db.php";
        $sql="select * from shows where cid=21 AND pid=4";
        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$result->fetch()){
            ?>
            <img src="../admin/<?php echo $row['spath']?>"/>
        <?php            }
        ?>
    </div>
</section>
<!--加入结束-->
<?php
include "../public/bottom.php";
?>
</body>
</html>
