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
  <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
</head>

<body>
  <!-- 引入header -->
  <?php
  require_once('header.php');
?>
  <!-- section开始 -->
  <div class="container">
    <div class="row">
      <?php
        require_once("leftTablist.php");
      ?>
      <div class="col-md-9">
        <!-- content开始 -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">个人资料</h3>
            </div>
            <div class="panel-body">
            <form class="form-horizontal">
   <!-- 用户名 -->
   <div class="form-group">
          <label for="inputUsername" class="col-md-3 control-label">用户名</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="inputUsername" name="username" placeholder="请输入用户名">
          </div>
        </div>
           <!-- 真实姓名 -->
        <div class="form-group">
          <label for="inputRealname" class="col-md-3 control-label">真实姓名</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="inputRealname" name="realname" placeholder="请输入真实姓名">
          </div>
        </div>
        <!-- 手机号码 -->
        <div class="form-group">
          <label for="inputMobile" class="col-md-3 control-label">手机号码</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="inputMobile" name="mobilePhone" placeholder="请输入手机号码">
          </div>
        </div>
         <!-- 联系电话 -->
         <div class="form-group">
          <label for="inputTel" class="col-md-3 control-label">联系电话</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="inputTel" name="tel" placeholder="请输入联系电话">
          </div>
        </div>
         <!-- 个人学历 -->
         <div class="form-group">
          <label for="inputEducation" class="col-md-3 control-label">个人学历</label>
          <div class="col-md-9">
           <select name="education">
               <option value="1">小学</option>
               <option value="2">初中</option>
               <option value="3">高中/中专</option>
               <option value="4">专科</option>
               <option value="5">本科</option>
            </select>
          </div>
        </div>
             <!-- 个人收入 -->
        <div class="form-group">
            <label for="inputIncome" class="col-md-3 control-label">个人收入</label>
            <div class="col-md-9">
            <select name="income">
                <option value="1">1000元以下</option>
                <option value="2">2000元以下</option>
                <option value="3">3000元以下</option>
                <option value="4">4000元以下</option>
                <option value="5">5000元以下</option>
                </select>
            </div>
        </div>
          <!-- 联系地址 -->
          <div class="form-group">
          <label for="inputAddress" class="col-md-3 control-label">联系地址</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="请输入联系地址">
          </div>
        </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" class="btn btn-primary">保存数据</button>
    </div>
  </div>
</form>
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
</body>

</html>