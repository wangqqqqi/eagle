<?php
    include "db.php";
    $names=$_GET["names"];

    $sql="select * from user where name='{$names}'";
    $result=$db->query($sql);
    if ($result->fetch()){
        echo "err";
    }else{
        echo "ok";
    }