<?php
$cid=$_GET["cid"];
$pid=$_GET["pid"];
$cname=$_GET["cname"];
$cpath=$_GET['cpath'];
include  "../public/db.php";
$sql="update category set pid={$pid},cname='{$cname}',cpath='{$cpath}' where cid=".$cid;
if($db->exec($sql)){
    echo "<script>alert('修改成功');location.href='showCategory.php'</script>";
}