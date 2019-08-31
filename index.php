<?php
if(isset($_COOKIE["islogedin"])){
    if($_COOKIE["islogedin"]==1){
        //Header("HTTP/1.1 303 See Other");
        Header("Location: ./personal.php");
        exit();
    }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="Expires" content="0">
        <title>登录</title>
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    </head>

    <body>
    <div class="login_box">
        <div class="login_l_img"><img src="picture/login-img.png"></div>
        <div class="login">
            <div class="login_logo"><a href="#"><img src="picture/login_logo.png"></a></div>
            <div class="login_name">
                <p>登陆系统</p>
            </div>
                <form method="post" action="postHolder.php">
                    <td>
                        <select name="type" >
                            <option value="0">后台管理</option>
                            <option value="1" selected="selected">顾客</option>
                            <option value="2">餐厅</option>
                        </select>
                    </td>
                    <input type="hidden" name="operate" value="login">
                    <input name="username" type="text" value="用户名" onfocus="this.value=''" onblur="if(this.value==''){this.value='用户名'}" autocomplete="off">
                    <span id="password_text" onclick="this.style.display='none';document.getElementById('password').style.display='block';document.getElementById('password').focus().select();">密码</span>
                    <input name="passwd" type="password" id="password" style="display:none;" onblur="if(this.value==''){document.getElementById('password_text').style.display='block';this.style.display='none'};" autocomplete="off">
                    <input value="登录" style="width:100%;" type="submit">
                </form>
            </div>
    </div>
    </body>
</html>