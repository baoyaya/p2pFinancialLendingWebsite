<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 引入bootstrap样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapvalidator样式 -->
    <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/regLogin.min.css">
</head>
<body>
<!-- 引入header -->
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
      <h1 class="el-page-title">用户注册</h1>
    </div>
  </div><!-- /.container-fluid -->
  </nav>
<!-- section开始 -->
<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">用户注册</h3>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" id="form-test">
      <!-- 用户名 -->
        <div class="form-group">
          <label for="inputUsername" class="col-md-3 control-label">用户名</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="inputUsername" name="username" placeholder="请输入用户名">
          </div>
        </div>
        <!-- 密码 -->
        <div class="form-group">
          <label for="inputPassword3" class="col-md-3 control-label">密码</label>
          <div class="col-md-9">
            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="请输入密码">
          </div>
        </div>
          <!-- 确认密码 -->
        <div class="form-group">
          <label for="checkPassword" class="col-md-3 control-label">确认密码</label>
          <div class="col-md-9">
            <input type="password" class="form-control" id="checkPassword" name="checkPassword" placeholder="请再次输入密码">
          </div>
      </div>
        <!-- 手机号码 -->
        <div class="form-group">
          <label for="inputPhone" class="col-md-3 control-label">手机号码</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="请输入手机号码">
          </div>
        </div>
        <!-- 邮箱 -->
        <div class="form-group">
          <label for="inputemail" class="col-md-3 control-label">邮箱</label>
          <div class="col-md-9">
            <input type="email" class="form-control" id="inputemail" name="email" placeholder="请输入邮箱">
          </div>
        </div>
        <!-- 用户注册 -->
        <div class="form-group">
          <div class="col-md-offset-3 col-md-9">
            <button type="submit" class="btn btn-success">用户注册</button>
          </div>
        </div>
      </form>
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
<!-- 引入bootstrapvalidator -->
<script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="./dist/js/p2p.min.js"></script>
<script src="./dist/js/formCheck.min.js"></script>
</body>
</html>