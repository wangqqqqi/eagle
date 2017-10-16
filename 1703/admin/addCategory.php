<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/upload.js"></script>
    <title>Document</title>
</head>
<body>
<form action="addCategoryCon.php">
    所属分类:<select class="pid" name="pid">
        <option value="0">
            一级分类
        </option>
        <?php
          include "../libs/tree.class.php";
          include "../public/db.php";
          $treeobj=new tree();
          $treeobj->getTree(0,$db,"category",0,"-");
          echo ($treeobj->str);
        ?>
    </select><br>
    分类名称:<input type="text" name="cname"><br>
    <div class="parent"></div>

    <input type="hidden" value="" name="cpath">
    <input type="submit" value="添加分类">
</form>
</body>
<script>
    var upobj=new upload();
    upobj.createView({
        parent:document.querySelector(".parent")
    })
    upobj.up("./upload.php",function(e){
        document.querySelector("input[type=hidden]").value=e.join(";");
    })
</script>
</html>