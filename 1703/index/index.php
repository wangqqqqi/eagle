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
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/header.css">
    <link rel="stylesheet" href="../static/css/bottom.css">
    <link rel="stylesheet" href="../static/fonts/iconfont.css">
    <link rel="stylesheet" href="../static/css/index.css">

    <script src="../js/jquery-3.2.1.js"></script>

    <script src="../js/back.js"></script>
    <script src="../js/index.js"></script>
</head>
<body>
<!--banner开始-->
<section class="banner">
    <ul class="banner">
            <?php
            include "../public/db.php";
            $sql="select * from banner where cid=21";
            $result=$db->query($sql);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            while($row=$result->fetch()){
                ?>
            <li><img src="../admin/<?php echo $row['bpath']; ?>" alt="" /></li>
            <?php            }
            ?>
    </ul>
</section>
<!--banner结束-->
<!--圆开始-->
<section class="yuan">
    <ul class="yuan">
        <?php
        include "../public/db.php";
        $sql="select * from shows where cid=21 AND pid=1";
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i=1;
        while ($row=$result->fetch()){
            if ($i%2!=0){
                $i++;?>
                <li><a href="">
                        <div class="yuan1">
                            <div class="yuan-main" style="background: url(../admin/<?php echo $row['spath'] ?>)no-repeat center/cover"></div>
                            <div class="yuan1-hidden">
                                <h2><?php echo $row['stitle'] ?></h2>
                                <div class="tiao"></div>
                                <h4>艺格视觉</h4>
                            </div>
                        </div>
                        <div class="yuan-wenzi">
                            <h2><?php echo $row['stitle'] ?></h2>
                            <p><?php echo $row['scon'] ?></p>
                        </div>
                    </a>
                </li>
        <?php

            }else{
                $i++;?>
                <li><a href="">
                        <div class="yuan-wenzi2">
                            <h2><?php echo $row['stitle'] ?></h2>
                            <p><?php echo $row['scon'] ?></p>
                        </div>
                        <div class="yuan2">
                            <div class="yuan-main2" style="background: url(../admin/<?php echo $row['spath'] ?>)no-repeat center/cover"></div>
                            <div class="yuan2-hidden">
                                <h2><?php echo $row['stitle'] ?></h2>
                                <div class="tiao"></div>
                                <h4>艺格视觉</h4>
                            </div>
                        </div>
                    </a></li>
        <?php    }

        }
        ?>
    </ul>
</section>
<!--圆结束-->
<section class="six">
    <div class="tu1">
    <?php
    include "../public/db.php";
    $sql="select * from shows where cid=21 AND pid=2";
    $result=$db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $i=1;
    while ($row=$result->fetch()){ ?>
        <img src="../admin/<?php echo $row['spath'] ?>"/>
        <?php } ?>
    </div>
    <div class="hidden1"></div>
    <div class="hidden2"></div>
    <div class="head1">艺格视觉</div>
    <div class="head2">EAGLE VISUAL</div>
</section>
<?php
    include "../public/bottom.php";
?>
</body>
</html>