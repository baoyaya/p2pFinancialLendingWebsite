<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- bootstrap样式 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
</head>

<body>
  <!-- 引入header -->
  <?php
  require_once('header.php');
?>
  <!-- section开始 -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading leftTitle">
            <h3 class="panel-title">信用贷</h3>
          </div>
          <div class="panel-body">
          <p>可借金额 <span>¥ 2,000.00</span></P>
          <p><a href="#">申请条件</a></p>
          <p>仅限成都地区</P>
          <ul>
            <li>填写基本资料</li>
            <li>身份认证</li>
            <li>视频认证</li>
          </ul>
          <div><button type="button" class="btn btn-info btn-sm"><a href="borrow-apply.php?borrowType=1">立刻申请</a></button></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading centerTitle">
            <h3 class="panel-title">车易贷</h3>
          </div>
          <div class="panel-body">
          <p>可借金额 <span>¥ 2,000.00</span></P>
          <p><a href="#">申请条件</a></p>
          <p>仅限成都地区</P>
          <ul>
            <li>填写基本资料</li>
            <li>身份认证</li>
            <li>视频认证</li>
          </ul>
          <div><button type="button" class="btn btn-info btn-sm"><a href="borrow-apply.php?borrowType=2">立刻申请</a></button></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading rightTitle">
            <h3 class="panel-title">房易贷</h3>
          </div>
          <div class="panel-body">
          <p>可借金额 <span>¥ 2,000.00</span></P>
          <p><a href="#">申请条件</a></p>
          <p>仅限成都地区</P>
          <ul>
            <li>填写基本资料</li>
            <li>身份认证</li>
            <li>视频认证</li>
          </ul>
          <div><button type="button" class="btn btn-info btn-sm"><a href="borrow-apply.php?borrowType=3">立刻申请</a></button></div>
          </div>
        </div>
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
</body>

</html>