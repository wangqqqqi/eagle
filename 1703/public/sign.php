<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    a{
        text-decoration: none;
    }
    form{
        width:500px;
        height:450px;
        border-radius: 5px;
        border: 1px solid #9d9d9d;
        position: absolute;
        top:0;
        right:0;
        left:0;
        bottom:0;
        margin:auto;
        overflow: hidden;
    }
    header{
        width:100%;
        height:50px;
        background: #9d9d9d;
        text-align: center;
        line-height: 50px;
        font-size: 20px;
        color: #fff;
    }
    main{
        width:400px;
        height:400px;
        padding:25px 50px;
        font-size: 18px;
    }
    input{
        margin-top: 10px;
        width:400px;
        height:30px;
        outline: none;
    }
    button{
        width:200px;
        height:40px;
        background: cornflowerblue;
        border-radius: 5px;
        border:none;
        font-size: 20px;
        color: #fff;
        outline: none;
    }
    span{
        font-size: 16px;
        float: right;
        line-height: 40px;
    }
    .mes{
        margin-top: 20px;
        position: relative;
    }
    .notice{
        font-size: 12px;
        height:25px;
        width:120px;
        position: absolute;
        bottom:0;
        right: 0;
        display: none;
        line-height: 12px;
    }
</style>
<body>
    <form action="signin.php" method="post">
        <header>注册页面</header>
        <main>
            <div class="mes">用户名：<br><input type="text" name="names" placeholder="请输入您的用户名"><div class="notice"></div></div>
            <div class="mes">输入密码：<br><input type="password" name="pass1" placeholder="请输入您的密码"><div class="notice"></div></div>
            <div class="mes">确认密码：<br><input type="password" name="pass2" placeholder="请再次输入您的密码"><div class="notice"></div></div><br>
            <button type="submit" disabled="disabled">注册</button><span>如果已有账号请 <a href="login.php">登录</a></span>
        </main>
    </form>
</body>
<script src="../js/jquery-3.2.1.js"></script>
<script>
    var names=$("input[name='names']");
    var pass1=$("input[name='pass1']");
    var pass2=$("input[name='pass2']");

    var namesreg=/^[a-z]\w{5,11}$/i;
    var passreg=/^\w{6,16}$/i;

    names.keyup(function(){
        var that=$(this);
        var val=$(this).val();
        that.data("flag",false);
        if(namesreg.test(val)){
            names.next().css({display:"block",color:"green"})
            $.ajax({
                url:"username.php",
                data:"names="+val,
                success:function (e) {
                    console.log(e)
                    if(e=="ok"){
                        names.next().html("用户名可用！")
                        that.data("flag",true);
                    }else{
                        names.next().html("用户名已被占用！")
                        that.data("flag",false);
                    }
                }
            })
        }else{
            names.next().css({display:"block",color:"red"}).html("输入的格式不规范！");
            that.data("flag",false);
        }
    })
    pass1.keyup(function(){
        var that=$(this)
        var val=$(this).val();
        that.data("flag",false);
        if(passreg.test(val)){
            pass1.next().css({display:"block",color:"green"})
            if(val==pass2.val()){
                pass1.next().html("密码格式正确！")
                pass2.next().html("密码格式正确！")
                that.data("flag",true);
                pass2.data("flag",true);
            }else{
                pass1.next().html("两次密码不一致！")
                pass2.next().html("两次密码不一致！")
                that.data("flag",false);
            }
        }else{
            pass1.next().css({display:"block",color:"red"}).html("输入的格式不规范！");
            that.data("flag",false);
        }
    })
    pass2.keyup(function(){
        var that=$(this);
        var val=$(this).val();
        that.data("flag",false);
        if(passreg.test(val)){
            pass2.next().css({display:"block",color:"green"})
            if(val==pass1.val()){
                pass1.next().html("密码格式正确！")
                pass2.next().html("密码格式正确！")
                that.data("flag",true);
                pass1.data("flag",true);
            }else{
                pass1.next().html("两次密码不一致！")
                pass2.next().html("两次密码不一致！")
                that.data("flag",false);
            }
        }else{
            pass2.next().css({display:"block",color:"red"}).html("输入的格式不规范！");
            that.data("flag",false);
        }
        check();
    })

    function check(){
        var flag=true;
        $("input").each(function(index,obj){
            if(!$(this).data("flag")){
                flag=false;
            }
        })
        if(flag){
            $("button").removeAttr("disabled");
        }else{
            $("button").attr("disabled","disabled");
        }
        /*$("button").click(function(){
            $.ajax({
                url:"signin.php",
                data:{names,pass1},
                success:function (e) {
                    if(e=="ok"){
                        alert("注册成功！")
                    }
                }
            })
        })*/
    }
</script>
</html>