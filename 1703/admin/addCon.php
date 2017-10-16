<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="../static/editor/lang/zh-cn/zh-cn.js"></script>
    <script src="../js/upload.js"></script>
</head>
<body>
<form action="addConCon.php">
    所属分类:
    <select name="cid" >
        <option value="0">一级分类</option>
        <?php
        include "../libs/tree.class.php";
        include "../public/db.php";
        $treeobj=new tree();
        $treeobj->getTree(0,$db,"category",0,"-");
        echo ($treeobj->str);
        ?>
    </select><br>
    内容标题: <input type="text" name="stitle"><br>
    内容: <br>
    <textarea name="scon" id="" cols="30" rows="10"></textarea><br>
    所属部分: <input type="text" name="pid"><br>
    <div class="parent"></div>

    <input type="hidden" value="" name="spath">

    <input type="submit" value="添加">

    <script>
        var upobj=new upload();
        upobj.createView({
            parent:document.querySelector(".parent")
        })
        upobj.up("./upload.php",function(e){
            document.querySelector("input[type=hidden]").value=e.join(";");
        })
    </script>
</form>
</body>
</html>
