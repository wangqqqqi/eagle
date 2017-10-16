<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../static/css/header.css"/>
    <link rel="stylesheet" type="text/css" href="../static/css/bottom.css"/>
    <link rel="stylesheet" type="text/css" href="../static/css/neirong.css"/>

</head>
<body>
<?php
    include "../public/header.php";
?>
<!--banner开始-->
<section class="banner"></section>
<!--banner结束-->
<!--内容开始-->
<section class="neirong">
    <?php
    include "../public/db.php";
    $cid=$_GET['cid'];
    $sql="select * from shows where cid='{$cid}'";
    $result=$db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $i=1;
    while ($row=$result->fetch()){ ?>
        <h3><?php echo $row['stitle'] ?></h3>
        <h3>About Us</h3>
        <ul class="abouts">
            <li>
                <div class="main-img">
                    <img src="../admin/<?php echo $row['spath'];?>" alt="" />
                </div>
                <div class="main-wenzi">
                    <h3>产品外观设计公司对于产品外观设计的定义</h3>
                    <p><?php echo $row['scon'] ?></p>
                </div>
            </li>
        </ul>
    <?php } ?>
</section>
<!--内容结束-->
<!--底部开始-->
<?php
    include "../public/bottom.php";
?>
<!--底部结束-->
</body>
</html>
