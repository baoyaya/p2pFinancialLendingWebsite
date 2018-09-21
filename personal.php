<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- bootstrap样式 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
</head>

<body>
  <!-- 引入header -->
  <?php
  require_once('header.php');
?>
  <!-- section开始 -->
  <div class="container">
    <div class="row" id="person">
      <?php
        require_once("leftTablist.php");
      ?>
      <div class="col-sm-9 col-xs-12" id="mainContent">
        <!-- content开始 -->
        <button type="button" class="btn btn-primary btn-xs btnOn">隐藏</button>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="part1">
              <div class="row">
                <div class="col-md-12 clearfix">
                <div class="pull-left">
               <img src="./images/head_icon.jpg">
               </div>
               <div>
                  <p> 昵 称：源代码教育</p>
                  <p>用户名：小强</P>
                  <p>最后登录时间：2016-10-25 15:30:10</p>
               </div>
                </div>
              </div>
            </div>
            <div class="part2">
            <div class="row">
              <div class="col-md-4">总金额：<span>10000元</span></div>
              <div class="col-md-4">可用金额：<span>8000元</span></div>
              <div class="col-md-4">冻结金额：<span>2000元</span></div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                <button type="button" class="btn btn-danger btn-lg">账户提现</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 clearfix">
                <div class="pull-left">
                 <img src="./images/shiming.png">
                </div>
                <div>
                    <h5>实名认证</h5>
                    <p>未认证&emsp;<a href="#">马上认证</a></P>
                </div>
                <p>实名认证之后才能在平台投资</p>
              </div>
              <div class="col-md-4 clearfix">
                <div class="pull-left">
                 <img src="./images/shouji.jpg">
                </div>
                <div>
                    <h5>实名认证</h5>
                    <p>未认证&emsp;<a href="#">马上认证</a></P>
                </div>
                <p>实名认证之后才能在平台投资</p>
              </div>
              <div class="col-md-4 clearfix">
                  <div class="pull-left">
                 <img src="./images/youxiang.jpg">
                </div>
                <div>
                    <h5>实名认证</h5>
                    <p>未认证&emsp;<a href="#">马上认证</a></P>
                </div>
                <p>实名认证之后才能在平台投资</p>
              </div>
              <div class="col-md-4 clearfix">
                  <div class="pull-left">
                 <img src="./images/baozhan.jpg">
                </div>
                <div>
                    <h5>实名认证</h5>
                    <p>未认证&emsp;<a href="#">马上认证</a></P>
                </div>
                <p>实名认证之后才能在平台投资</p>
              </div>
            </div>
            </div>
          </div>
        </div>

        <!-- content结束 -->
      </div>
    </div>
  </div>
  <!-- section结束 -->
  <!-- 引入footer -->
  <?php
  require_once('footer.php');
?>
  <!-- 引入jquery -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- 引入bootstrap -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./dist/js/p2p.min.js"></script>
  <script src="./src/js/userStateCheck.js"></script>
  <script src="./src/js/touchmove.js"></script>
</body>

</html>