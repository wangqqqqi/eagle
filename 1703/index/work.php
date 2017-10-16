<?php
    include "../public/header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../static/css/work.css"/>

    <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../js/work.js"></script>
    <title></title>
</head>
<body>
<!--banner开始-->
<section class="banner">
    <div class="vedio">
        <video src="../img/1.mp4" type="video/mp4" loop="loop" autoplay="autoplay"></video>
        <div class="headname">When beauty meet Internet.<br>把互联网技术带入美学领域</div>
    </div>
</section>
<!--banner结束-->
<!--heng1开始-->
<section class="heng1">
    <div class="heng1-main">
        <div class="heng-left">
            <div class="heng-left1">艺格视觉--优质品牌设计专家</div>
            <div class="heng-left2">EAGLE VISUAL - HIGH QUALITY BRAND DESIGN EXPERT!</div>
        </div>
        <div class="heng-right">
            <div class="heng-right1">BRAND</div>
            <div class="heng-right2">
                <button class="heng-right2-1">行业类别 : ALL
                    <div class="sanjiao"></div>
                    <div class="slide1">
                        <ul class="slide-main">
                            <li><a href="">互联网/科技</a></li>
                            <li><a href="">农业/食品</a></li>
                            <li><a href="">文化/教育</a></li>
                            <li><a href="">制造/工业</a></li>
                            <li><a href="">金融/投资</a></li>
                            <li><a href="">快消品/零售</a></li>
                            <li><a href="">健康/医药</a></li>
                            <li><a href="">餐饮/酒店/连锁</a></li>
                            <li><a href="">企业/集团</a></li>
                        </ul>
                    </div>
                </button>
                <button class="heng-right2-2">专业细分 : ALL
                    <div class="sanjiao"></div>
                    <div class="slide2">
                        <ul class="slide-main">
                            <li><a href="">导视系统设计</a></li>
                            <li><a href="">UI界面设计</a></li>
                            <li><a href="">网站设计</a></li>
                            <li><a href="">空间店面设计</a></li>
                            <li><a href="">宣传画册设计</a></li>
                            <li><a href="">包装系统设计</a></li>
                            <li><a href="">VIS系统设计</a></li>
                            <li><a href="">品牌标志设计</a></li>
                            <li><a href="">品牌策划设计</a></li>
                        </ul>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>
<!--heng1结束-->
<!--brand开始-->
<section class="brand">
    <div class="brand-main">
        <ul class="brand-main">
            <?php
            include "../public/db.php";
            $sql="select * from shows where cid=19 AND pid=1";
            $result=$db->query($sql);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            while($row=$result->fetch()){
                ?>
                <li><a href="">
                        <div class="li1">
                            <img src="../admin/<?php echo $row['spath'] ?>" alt="" />
                        </div>
                        <div class="name">
                            <div class="name1">QINGNIANLU PRIMARY SCHOOL</div>
                            <div class="name2">青年路小学</div>
                            <div class="name3">Brand Design Logo/Vis/War/Pacage</div>
                        </div>
                        <div class="zhezhao">
                             <div class="li1">&#xe603;</div>
                             <div class="Name"></div>
                        </div>
                    </a>
                </li>
            <?php            }
            ?>

        </ul>
    </div>
</section>
<!--brand结束-->
<?php
    include "../public/bottom.php";
?>
</body>
</html>
