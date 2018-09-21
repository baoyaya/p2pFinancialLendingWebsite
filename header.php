<!-- 引入顶部导航 -->
<?php
    require_once('topNav.php');
?>
<!-- 主导航 -->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="./images/logo.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav navbar-left" id="mainmenu">
        <li class="active"><a href="index.php?menuid=1">首页 </a></li>
        <li><a href="invest.php?menuid=2">我要投资</a></li>
        <li><a href="borrow.php?menuid=3">我要借款</a></li>
        <li><a href="personal.php?menuid=4">个人中心</a></li>
        <li><a href="#?menuid=5">新手指引</a></li>
        <li><a href="#?menuid=6">关于我们</a></li>
      </ul>
  </div><!-- /.container-fluid -->
  </nav>
  <script>
    var urlstr=location.href;
    var urlid=urlstr.split('=')[1]-1;
    $("#mainmenu li").eq(urlid).addClass("active").siblings().removeClass("active");
  </script>