<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<title>狐狸！干杯！</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="js/cursor.js"></script>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bg.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/login.css">
</head>        

<div class="header">

<a href="#" id="hid"></a>
<a href="#" ><?php echo  $_SESSION['username']; ?><a>
  <div class="header-right">

<a href="#" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776</a>
  </div>
</div>
<div id="mySidenav" class="sidenav">
  <div onclick="closeNav()">
<a href="#" onclick="iframe.location='home.html'">狐狸社区</a>
    <a href="#" onclick="iframe.location='shop.html'">下载</a>
    <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">登录</a>
</div>
</div>
        <style type="text/css">
            body {
                padding: 0;
                margin: 0 auto;
            }

            #c {
                height: 25px;
                line-height: 30px;
                position: fixed;
                bottom: 0;
                width: 100%;
                text-align: center;
                background: #333;
                color: #fff;
                font-family: Arial;
                font-size: 12px;
                letter-spacing: 1px;
            }

            .content {
                height: 1800px;
                width: 100%;
                text-align: center;
            }
        </style>
<html style="height: 90%;">
  <body style="height: 100%;">
    <div style="height: 100%;">
<iframe name="iframe" src="home.html" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
       <div id="c">©2020-2024 狐狸社区。所有版权。</div>
    </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "150px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script type="text/javascript">
    //创建一个日期对象
    var dd= new Date();
    var st =document.getElementById("hid");
    var hour =dd.getHours();//获取当前时
    //alert(hour);
    if(hour>0 && hour<=6){
        st.innerHTML="还没休息啊，夜猫子，该休息了";
    }else if(hour>6 && hour<=9){
        st.innerHTML="上午好";
    }else if(hour>9 && hour<=12){
        st.innerHTML="早上好";
    }else if(hour>12 && hour<=15){
        st.innerHTML="中午好";
    }else if(hour>15 && hour<=18){
        st.innerHTML="下午好";
    }else if(hour>18 && hour<=21){
        st.innerHTML="傍晚好";
    }else if(hour>21 && hour<=24){
        st.innerHTML="晚上好";
    }

    </script>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="key.php" method="post">
                    <h1>登录 狐狸社区</h1>
                    <h2>使用FoxCommPass登录</h2>
    <div class="container">
      <label for="uname"><b>用户名</b></label>
                            <input type="text" placeholder="用户名" class="username" name="username">
                            <span class="user_name"></span>

      <label for="uname"><b>邮箱</b></label>
                            <input type="text" placeholder="邮箱" class="account" name="account">
                            <span class="user_account"></span>

      <label for="psw"><b>密码</b></label>
                            <input type="password" placeholder="密码" class="password" name="password">
                            <span class="user_password"></span>
        
      <button type="submit">登录</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> 记住我
       </label>
    </div>

  </form>
</div>

<script>
// 获取模态
var modal = document.getElementById('id01');

// 当用户点击模态之外的任何地方时，关闭它
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  </body>
</html>
</html>