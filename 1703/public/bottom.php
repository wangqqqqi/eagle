<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../static/css/bottom.css">
    <link rel="stylesheet" href="../static/fonts/iconfont.css">
    <title>Document</title>
</head>
<body>
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
    <div class="black">
        <div class="black-main">
            <div class="black1">
                <?php
                include "../public/db.php";
                $sql="select * from shows where cid=21 AND pid=3";
                $result=$db->query($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                while($row=$result->fetch()){?>
                    <div class="black1-1"><?php echo $row['stitle'] ?></div>
                    <div class="black1-2"><?php echo $row['scon'] ?></div>
                    <?php
                }
                ?>
            </div>
            <div class="black3">
                <?php
                include "../public/db.php";
                $sql="select * from shows where cid=21 AND pid=4";
                $result=$db->query($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                while($row=$result->fetch()){?>
                    <div class="black1-1"><?php echo $row['stitle'] ?></div>
                    <div class="black1-2"><?php echo $row['scon'] ?></div>
                    <div class="code" style="background: url(../admin/<?php echo $row['spath']?>)no-repeat center/cover"></div>
                    <?php
                }
                ?>
                <div class="codezi">品牌交流咨询(欢迎关注主创设计师微信)</div>
            </div>
        </div>
    </div>
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