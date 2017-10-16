<?php
    header("Content-type:text/html;charset=utf-8");
    include "db.php";
    $names=$_POST["names"];
    $pass=md5($_POST["pass1"]);
    $sql="insert into user (name,pass) values ('{$names}','{$pass}')";
    $db->query($sql);
    /*if($stu->affected_rows>0){
        echo "ok";
    }*/
    if ($db->query($sql)){
        echo "<script>alert('注册成功！');location.href='login.php'</script>";
    }


