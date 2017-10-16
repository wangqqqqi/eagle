<?php
$cid=$_GET["cid"];
$bpath=$_GET["bpath"];
include "../public/db.php";
$sql="insert into banner (bpath,cid) values ('{$bpath}',$cid)";
if($db->exec($sql)){
    echo "<script>alert('添加成功');location.href='addbanner.php';</script>";
}