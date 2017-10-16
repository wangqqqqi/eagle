<?php
//    header("Content-type:text/html;charset=utf-8");
    session_start();
    include "db.php";
    $names=$_POST["names"];
    $pass=md5($_POST["pass1"]);
    $sql="select * from user where name='{$names}' and pass='{$pass}'";
    $result=$db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    if($result->fetch()){
        $_SESSION["login"]="yes";
        $_SESSION["names"]=$names;
        $row=$result->fetch();
        $_SESSION["uid"]=$row["uid"];
        $url="../index/index.php";
        $message="登陆成功！";
        include "time.php";
//        echo "<script>alert('登录成功！');location.href='index.php'</script>";
    }else{
        $url="login.php";
        $message="登陆失败，请重新登录！";
        include "time.php";
//        echo "<script>alert('登录失败，请重新登录！');location.href='login.php'</script>";
    }