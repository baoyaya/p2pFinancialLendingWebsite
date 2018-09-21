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
      <!-- 功能页面 -->

      <div class="col-sm-9 col-xs-12" id="mainContent">
        <!-- content开始 -->
        <button type="button" class="btn btn-primary btn-xs btnOn">隐藏</button>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">我的借款信息列表</h3>
          </div>
          <div class="panel-body">
            <div class="bs-example" data-example-id="simple-table">
              <table class="table">
                <thead>
                  <tr>
                    <th>标题</th>
                    <th>时间</th>
                    <th>借款金额（元）</th>
                    <th>期限</th>
                    <th>利率</th>
                    <th>状态</th>
                  </tr>
                </thead>
                <tbody id="borrowData">
                
                </tbody>
              </table>
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
  <!-- 引入jqueryTemplate模块 -->
  <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
  <!-- 引入bootstrap -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./dist/js/p2p.min.js"></script>
  <!-- 引入手机端滑动 -->
  <script src="./src/js/touchmove.js"></script>
  <!-- 借款列表自动加载 -->
  <script src="./src/js/borrowList.js"></script>
  <script id="borrowTmpl" type="text/html">
    <tr>
      <td>${borrowTitle}</td>
      <td>${submitDatetime}</td>
      <td>${borrowAmount}</td>
      <td>${monthes2Return}</td>
      <td>${currentRate}%</td>
      <td>
        <label class="text-muted">待发布</label>
      </td>
    </tr>
  </script>
</body>

</html>