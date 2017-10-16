<?php
$cid=$_GET["cid"];
$stitle=$_GET["stitle"];
$scon=$_GET["scon"];
$spath=$_GET["spath"];
$pid=$_GET['pid'];
include "../public/db.php";
$sql="insert into shows (stitle,scon,spath,cid,pid) values ('{$stitle}','{$scon}','{$spath}',$cid,'{$pid }')";
if($db->exec($sql)){
    echo "<script>alert('添加成功');location.href='addCon.php';</script>";
}