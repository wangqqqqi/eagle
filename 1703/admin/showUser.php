<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/web/1703/css/bootstrap.css">
</head>
<style>
    body,html,a{
        margin:0;
        padding:0;
        text-decoration: none;
    }
    tr,th{
        text-align: center;
    }
    a{
        color: #000;
    }
    img{
        width:25px;
        height:25px;
        margin:0 auto;
    }
</style>
<body>
   <table class="table table-bordered table-striped">
        <tr>
            <th>用户名</th>
            <th>昵称</th>
            <th>头像</th>
            <th>操作</th>
        </tr>

       <?php
        include  "../public/db.php";

        $sql="select * from admin";
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row=$result->fetch()){
            $url=explode(";",$row["aphoto"]);


            ?>
            <tr>
                <td>

                    <?php
                      echo $row["aname"]
                    ?>
                </td>
                <td>

                    <?php
                    echo $row["anicheng"]
                    ?>
                </td>
                <td>
                    <img src="<?php echo
                    $url[0]?>" alt="" width="200">
                </td>

                <td>

                    <a class="btn btn-danger" href="editUser.php?aid=<?php echo $row['aid']?>"> 编辑</a>


                    <a class="btn btn-danger" href="delUser.php?aid=<?php echo $row['aid']?>"> 删除</a>
                </td>
            </tr>
            <?php
        }
       ?>
   </table>
</body>
</html>