<?php
include "../public/db.php";
$pid=$_GET["pid"];
$cname=$_GET["cname"];
$cpath=$_GET["cpath"];
$sql="insert into category (cname,pid,state,cpath) VALUES ('{$cname}',{$pid},0,'{$cpath}')";

if($db->exec($sql)){

    if($pid!=0) {
        $sql = "update category set state=1 WHERE cid=" . $pid;

            $db->exec($sql);
            echo "<script>alert('添加成功');location.href='addCategory.php'</script>";


    }else{
        echo "<script>alert('添加成功');location.href='addCategory.php'</script>";
    }
}
