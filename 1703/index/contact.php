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
    <link rel="stylesheet" href="../static/css/contact.css">
    <link rel="stylesheet" href="../static/css/bottom.css">
    <title>Document</title>
</head>
<body>
<!--banner开始-->
    <?php
    include "../public/db.php";
    $sql="select * from banner where cid=16";
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
    <h2>即刻合作，让世界为我们惊叹</h2>
    <h1>CONTACT US</h1>
</section>
<!--文字结束-->
<!--地址开始-->
<section class="address">
    <div class="beijing">
        <div class="city">
            <div class="citys">北京</div>
            <ul class="map-main">
                <li>
                    <img src="../img/door1.jpg" alt="" />
                </li>
                <li>
                    <img src="../img/map1.jpg"/>
                </li>
                <li>
                    <h1>BEIJING</h1>
                    <h3>北京(总部)</h3>
                    <h5>全国统一热线：4008-100-100</h5>
                    <h5>联系电话：13037088888</h5>
                    <h5>地址:北京市朝阳区台骅国际城2503号</h5>
                    <h5>传真：13037088888</h5>
                    <h5>邮编：032300</h5>
                    <h5>邮箱：1005767673@163.com</h5>
                </li>
            </ul>
        </div>
    </div>
    <div class="beijing">
        <div class="city">
            <div class="citys">上海</div>
            <ul class="map-main">
                <li>
                    <img src="../img/door2.jpg" alt="" />
                </li>
                <li>
                    <img src="../img/map2.jpg"/>
                </li>
                <li>
                    <h1>SHANGHAI</h1>
                    <h3>上海(分部)</h3>
                    <h5>全国统一热线：4008-100-100</h5>
                    <h5>联系电话：13037088888</h5>
                    <h5>地址:上海市浦东区台骅国际城2503号</h5>
                    <h5>传真：13037088888</h5>
                    <h5>邮编：032300</h5>
                    <h5>邮箱：1005767673@163.com</h5>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--地址结束-->
<!--底部开始-->
<section class="bottom">
    <div class="green">
        <div class="green-main">
            <div class="green-left">
                <ul class="left">
                    <li><button>&#xe6a1;</button></li>
                    <li><button>&#xe659;</button></li>
                    <li><button>&#xe63a;</button></li>
                </ul>
            </div>
            <div class="green-right">
                <div class="tel">&#xe61c;</div>
                <div class="tel-num">0351-7758521</div>
            </div>
        </div>
    </div>
    <form action="" method="post" class="contacts">
        <h3>leave a message</h3>
        <div class="chat">
            <div class="chat1">
                您的称呼:
                <input name="uname" type="text" />
            </div>
            <div class="chat1">
                公司名称:
                <input name="cname" type="text" />
            </div>
            <div class="chat1">
                联系电话:
                <input name="phone" type="text" />
            </div>
            <div class="chat2">
                您的要求:
                <textarea name="ask" rows="" cols=""></textarea>
            </div>
        </div>
        <input type="submit" class="submit">
    </form>
    <div class="footer">
        <div class="footer-main">
            <div class="footer1">版权所有:山西省太原市艺格视觉创意品牌设计有限公司 &nbsp;备案号:晋ICP备******号</div>
            <div class="footer2"></div>
        </div>
    </div>
</section>
<!--底部结束-->
</body>
</html>
